<?php
class professorView extends professorCont
{
    public function showSubjects()
    {
        $data = $this->subjectsCont();
        foreach($data as $subjects)
        { ?>
            <li class="list-group-item" onclick="show()" data-sid="<?=$subjects['id'] ;?>"   value="<?=$subjects['id'] ;?>" >  <?=$subjects['subject_name'] ;?> </li>
        <?php }   
    }

    public function showChapters($sub_id)
    {
        $data = $this->chaptersCont($sub_id);
       foreach($data as $chapters)
       {?>
        <div class="d-flex justify-content-between subject">
            <li class="list-group-item"  id="chapter">
                <a href="question-bank.php?chapter_id=<?= $chapters['id'] ?>"><?= $chapters['chapter_name'] ?> </a>
                <a href="#" data-bs-toggle="modal" class="remove_chapter" data-sid="<?= $chapters['id'] ?>" data-bs-target="#remove-chapter"><i class="fa-solid fa-x del-subj"></i></a>
            </li>
        </div>
     <?php
       }
    }

    public function addChapter($sub_id, $chapter_name)
    {
        $this->addChapterCont($sub_id, $chapter_name);
    }

    public function deleteChapter($chapter_id)
  {
    $this->deleteChapterCont($chapter_id);
  }

    //the part of professor profile
    public function getExams($prof_id)
    {
        $data=$this->getExamsCont($prof_id);
        echo $data;
    }

    public function getNotifications($prof_id)
    {
        $data= $this->getNotificationCont($prof_id);
        foreach($data as $note){
            if(!$this->emptyExamCont($note['id'])) 
            {
               $this->deleteexam($note['id']);
               ?>
                <p>
                <i class="fa-solid fa-info"></i>
                <Span class="exam_note"><?= $note['exam_name']?></Span>
                had been created. it will be deleted that it doesn't have any questions
                </br>Thanks for your efforts.
            </p>
            <?php
            }
            else{?>

           
        
            <p>
                <i class="fa-solid fa-info"></i>
                <Span class="exam_note"><?= $note['exam_name']?></Span>
                had been created. You can follow the results in Results history.
                </br>Thanks for your efforts.
            </p>
        <?php
            }
        }
        
    }
    
    //the part of results history
    public function showExams($sub_id)
    {
        $data = $this->examsCont($sub_id);
       foreach($data as $exams)
       {?>
                  
        <li class="list-group-item list-group-item-exams"  id="exam">
            <a href="../Home/prof-results-sheet.php?exam_id=<?= $exams['id'] ?>" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="See Results"><?= $exams['exam_name'] ?> </a>
                <i class="fa-solid fa-info" data-bs-toggle="collapse" data-bs-target="#collaps<?= $exams['id'] ?>">
                    <span aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="See Details" class="details">&nbsp;</span>
                </i>
                <div class="collapse" id="collaps<?= $exams['id'] ?>">
            <div class="card card-body">
                <div class="accordion-body numbers-body">
                    <p>Exam Date <span><?= $exams['exam_date'] ?></span></p>
                    <p>Start From <span><?= $exams['start_time'] ?></span></p>
                   <p>Duration <span><?= $exams['duration'] ?></span></p>
                   
                    <p>Total Mark <span><?= $exams['total_mark'] ?></span></p>
                </div>
            </div>
        </div>
        </li>
        
        <?php
       }
    }

    public function showResultSheet($exam_id)
    {
        $data = $this->getResultSheet($exam_id);
        foreach ($data as $sheet) {
        ?>
            <tr>
                <td><?= $sheet['student_id'] ?></td>
                <td><?= $sheet['user_name'] ?></td>
                <td><?= $sheet['academic_id'] ?></td>
                <td><?= $sheet['level'] ?></td>
                <td><?= $sheet['department'] ?></td>
                <td><?= $sheet['result'] ?></td>
                <td><?= $sheet['total_mark'] ?></td>
            </tr>
        <?php
        }
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

    public function showQuestions($chapter_id)
    {
        $data = $this->showQuestionsContr($chapter_id);
        foreach ($data as $qts) {
            $a_data = $this->getQuestionsContr($qts['id']) ?>
            <div class="question" id="questions">
                <p class="question-body">
                    <?= $qts['question_text'] ?>
                    
                    <a type="button"  class="edit-btn" id="question" href="edit_question.php?question_id=<?= $qts['id'] ?>"><i class="fa fa-edit" ></i></a>     
                    <a href="#" data-bs-toggle="modal" class="remove_question" data-did="<?= $qts['id']; ?>" data-cid="<?= $qts['chapter_id']; ?>"  data-bs-target="#remove-question"><i class="fa-solid fa-trash-can"></i></a>                                                                                                                                                                                                               
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
                    <?php
                    $difficulty = $qts['difficulty'];
                    if ($difficulty == "easy" || $difficulty == "Easy") { ?>
                        <span class="easy"><?= $qts['difficulty'] ?></span>
                    <?php } else if ($difficulty == "medium" || $difficulty == "Medium" ) { ?>
                        <span class="medium"><?= $qts['difficulty'] ?></span>
                    <?php } else if ($difficulty == "hard" || $difficulty == "Hard") { ?>
                        <span class="hard"><?= $qts['difficulty'] ?></span>
                    <?php }
                    ?>
                </p>
                
            </div>
            <?php
                }
    }


    public function deleteQuestion($question_id)
    {
        $this->deleteQuestionContr($question_id);
    }




    // the part of edit question
    public function showQuestionToEdit($question_id)
    {
        $q_data = $this->getQuestionToEdit($question_id);
        foreach($q_data as $qts)
            { $a_data = $this->getAnswersToEdit($qts['id']); ?>
                <div class="question" id="questions">

                    <!-- question_text -->
                    <p class="edit-question-body"><input class="edit-question-input" type="text" value="<?= $qts['question_text'] ?>" name="question_text" placeholder="Type Question Head"></p>
                    <input type="hidden" name="question_id" value="<?= $qts['id'] ?>">
                    <input type="hidden" name="chapter_id" value="<?= $qts['chapter_id'] ?>">
                    <input type="hidden" name="question_type" value="<?= $qts['type'] ?>">
                    
                    <!-- answers -->
                    <ol type="a">
                    <?php
                        foreach($a_data as $answer)
                        {?>
                        <li class="edit-list">

                            <input class="edit-answer" type="text" name="<?= $answer['id'] ?>" 
                            value="<?= $answer['answer'] ?>" placeholder="Type Answer" 
                            <?php if($qts['type']== 'true&false') { echo 'disabled'; }?>>
                
                        </li>
                        <?php } ?>
                    </ol>


                <!-- correct_answer & difficulty ID -->
                <?php foreach ($a_data as $answer) { ?>
                <?php } ?>
                <input type="hidden" class="edit-answer" value="<?= $qts['difficulty'] ?>" name="difficulty" placeholder="Difficulty">

                
                <!-- correct_answer-->
                <p class="question-select">Answer:
                    <select name="correct_answer_id" >
                        <?php 
                        
                        foreach (array_slice($a_data, 0, 1)  as $answer) { 
                            ?>
                                <option value="<?= $answer['id']?>" <?php if ($answer['is_correct'] == "1") {echo "selected"; } ?>>a</option>
                            <?php }
                        foreach (array_slice($a_data, 1, 1)  as $answer) { 
                            ?>
                                <option value="<?= $answer['id']?>" <?php if ($answer['is_correct'] == "1") {echo "selected"; } ?>>b</option>
                            <?php }
                        foreach (array_slice($a_data, 2, 1)  as $answer) { 
                            ?>
                                <option value="<?= $answer['id']?>" <?php if ($answer['is_correct'] == "1") {echo "selected"; } ?>>c</option>
                            <?php }
                        foreach (array_slice($a_data, 3, 1)  as $answer) { 
                            ?>
                                <option value="<?= $answer['id']?>" <?php if ($answer['is_correct'] == "1") {echo "selected"; } ?>>d</option>
                            <?php }

                        ?>
                    </select>
                </p>

              

                <!-- difficulty-->
                <p class="question-select">Difficulty:
                    <select name="difficulty">
                    <option value="easy"<?php if($qts['difficulty']== 'easy'){ echo 'selected'; }?>>Easy</option>
                    <option value="medium"<?php if($qts['difficulty']== 'medium'){ echo 'selected'; }?>>Medium</option>
                    <option value="hard"<?php if($qts['difficulty']== 'hard'){ echo 'selected'; }?>>Hard</option>
                    </select>
                </p>
                
                

            </div>
            
            <?php    
            }
    }

    public function editQuestions($question_text, $difficulty, $question_id)
    {
        
        $this->editQuestionsContr($question_text, $difficulty, $question_id);
    }
     
    public function editAnswers($answer, $answer_id)
    {
        $this->editAnswersContr($answer, $answer_id);
    }

     public function editCorrectAnswer($answer_id)
    {
        $this->editCorrectAnswerCont($answer_id);
    } 




    // the part of setting  --->  professor
    public function showProfDetails()
    {
        $data = $this->getProfDetails();
        foreach ($data as $details) {
        ?>
            <fieldset class="inputs">

                <input type="hidden" name="prof_id" value="<?= $details['id'] ?>" placeholder="User ID" />
                <input type="text" name="user_name" value="<?= $details['user_name'] ?>" placeholder="Change Your Name" />
                <input type="text" name="academic_id" value="<?= $details['academic_id'] ?>" placeholder="Change Acadimic ID" />
                <input type="email" name="email" value="<?= $details['email'] ?>" placeholder="Change Email" />

                <input type="password" name="password" placeholder="Change Password" id="eye" />
                <button onclick="event.preventDefault(),myFunction()" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Password" class="view-password"><i class="fa-solid fa-eye"></i></button>

            </fieldset>

            <div id="btn-div">
                <button type="sumbit" name="prof_edit">Save Changes</button>
            </div>

        <?php
        }
    }

    public function uploadImageView()
    {
        $data = $this->getProfDetails();
        foreach ($data as $details) { 
            if(!empty($details['image'])){
                ?>
                <div class="prof-image">
                <img class=" profile-picture profile-img prof-img" src="../profile-images/professors/<?= $details['image'] ?>">
                </div>
                <?php }
            else{
                ?>
                <div class="prof-image">
                <img class=" profile-picture profile-img prof-img" src="../profile-images/professors/<?= "prof.png"?>">
                </div>
                <?php }
            
            }
    }

    public function editProfDetails($user_name, $academic_id, $email, $password, $prof_id)
    {
        $this->editProfDetailsCont($user_name, $academic_id, $email, $password, $prof_id);
    }

    public function uploadImage($image, $prof_id)
    {
        $this->uploadImageCont($image, $prof_id);
    }
}