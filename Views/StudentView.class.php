<?php 
class studentView extends studentCont
{
    public function showLevels()
    {
        $data =$this->getLevels();
        foreach($data as $level)
        {?>
            <option value="<?= $level['level_name'] ?>"><?= $level['level_name'] ?> </option>
        <?php    
        }
    }

    public function showDept($level_name)
    {
        $data = $this->getDept($level_name);
        foreach($data as $department)
        {?>
            <option value="<?= $department['dept_name'] ?>"><?= $department['dept_name'] ?> </option>
        <?php    
        }
    }

    
    // show student's exams 
    public function showExams()
    {
        $data = $this->getExams();
        foreach($data as $exam)
        {?>
            <tr>
                <th scope="row"><?= $exam['id'] ?></th>
                <td><?= $exam['exam_name'] ?></td>
                <td><?= $exam['exam_date'] ?></td>
                <td><?= $exam['start_time'] ?></td>
                <td><?= $exam['duration'] . " min" ?></td>
                <td><?= $exam['total_mark'] ?></td>
               
                <td>
                    <button > <a class="start" href="../includes/token_exam.inc.php?exam_id=<?= $exam['id'] ?>&exam_date=<?= $exam['exam_date'] ?>" > Start </a> </button>
                </td>
              
            </tr>
        <?php
        }
    }


    // the part of result history
    public function showStudResultSheet()
    {
        $data = $this->getStudResultSheet();
        foreach ($data as $sheet) {
        ?>
            <tr>
                <td><?= $sheet['id'] ?></td>
                <td><?= $sheet['exam_name'] ?></td>
                <td><?= $sheet['exam_date'] ?></td>
                <td><?= $sheet['start_time'] ?></td>
                <td><?= $sheet['duration'] ?></td>
                <td><?= $sheet['total_mark'] ?></td>
                <td><?= $sheet['result'] ?></td>
            </tr>
        <?php
        }
    }


    //the part of subjects
    public function showStudSubjects()
    {
        $data = $this->subjectsStudCont();
        foreach($data as $subjects)
        { ?>
            <li class="list-group-item" onclick="show()" value="<?=$subjects['id'] ;?>"> <?=$subjects['subject_name'] ;?> </li>
        <?php   
        }
    }

    public function showExamName($exam_id)
    {
      $data =$this-> getExamName($exam_id);
      foreach($data as $exam)
      {
          echo $exam['exam_name'];
      }
    }

    public function ExamMark($exam_id)
    {
        $data =$this-> getExamMark($exam_id);
        foreach($data as $exam)
        {
            echo $exam['total_mark'];
        }
    }

    // the part of show questions
    public function showQuestions($exam_id)
    {
        $s_data =$this->getExamStructure($exam_id);
        foreach($s_data as $structures)
        {
            $q_data = $this->getQuestions($structures['type'], $structures['difficulty'],$structures['num_of_questions'], $structures['chapter_id']);
            foreach($q_data as $question)
            { $a_data = $this->getAnswers($question['id']);
                ?>
             <div class="question" >
                
                <p class="question-body">
                        <?= $question['question_text'] ?>
                    </p>
                    <ol type="a">
                   
                        <?php
                        foreach($a_data as $answer)
                        {?>
                         
                        <li>
                           
                            <input class="form-check-input" type="radio"  name="<?=$question['id'] ?>"  id="<?=$answer['id']?>" value="<?=$answer['id'] ?>" >
                            <label class="form-check-label" for="<?=$answer['id'] ?>" >
                                <?=$answer['answer'] ?>
                            </label>
                        </li>
                        <?php } ?>
                    </ol>
                    </div>
            <?php
            }
        }
    }

    public function addAnswers($student_id, $exam_id, $question_id, $answer_id)
    {
        $this->addstudentAnswers($student_id, $exam_id, $question_id, $answer_id);
    }

    public function addResult($student_id, $exam_id)
    {
        $this->addResultCont($student_id, $exam_id);
    }

    public function takenExams($exam_id, $student_id)
    {
        $result = false;
       if(!$this->checktakenExams($exam_id, $student_id)) 
       {
           $result = false;
       }
       else
       {
           $result = true;
       }
       return $result;
    }

    public function showResult($exam_id, $student_id)
    {
        $r_data = $this->getResult($exam_id, $student_id);
        foreach($r_data as $result)
        {
            echo $result['result'];
        }
    }
    public function showStudChapters($sub_id)
    {
        $data = $this->chaptersStudCont($sub_id);
       foreach($data as $chapters)
       {?>      
            <li class="list-group-item" id="chapter"><a href="stud-question-bank.php?chapter_id=<?= $chapters['id'] ?>"><?= $chapters['chapter_name'] ?> </a></li>
        <?php }
    }


    // the part of question bank
    public function showChapterName($chapter_id)
    {
        $data = $this->getChaptersContr($chapter_id);
        foreach ($data as $chapters) {
            echo $chapters['chapter_name'];
        }
    }

    public function showQuestionsNumber($chapter_id)
    {
        $this->getQuestionsNumbers($chapter_id);
    }
    // questions in student question bank 
    public function showStudQuestions($chapter_id)
    {
        $data = $this->getQuestionsContr($chapter_id);
        foreach ($data as $qts) {
            $a_data = $this->getEditedQuestionsContr($qts['id']) ?>
            <div class="question" id="questions">
                <p class="question-body">
                    <?= $qts['question_text'] ?>
                </p>
                <input type="hidden" name="question_id" value="<?= $qts['id'] ?>">
                <ol type="a">
                    <?php
                    foreach ($a_data as $answer) {
                        $is_correct = $answer['is_correct'];
                        if ($is_correct == "1") { ?>
                            <li class="answer-list"><?= $answer['answer'] ?><i class="fa fa-check-square correct" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Correct Answer"><?php $answer['is_correct'] ?></i></li>
                        <?php } else if ($is_correct == "0") { ?>
                            <li class="answer-list"><?= $answer['answer'] ?></li> <?php }
                    }?>
                </ol>

                <p class="question-difficutly">Difficulty:
                    <span class="easy"><?= $qts['difficulty'] ?></span>
                </p> 
              

            </div>
            <?php
        }
    }

}