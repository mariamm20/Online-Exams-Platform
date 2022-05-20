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
        <li class="list-group-item"  id="chapter"><a href="question-bank.php?chapter_id=<?= $chapters['id'] ?>"><?= $chapters['chapter_name'] ?> </a></li>
     <?php
       }
    }

    public function addChapter($sub_id, $chapter_name)
    {
        $this->addChapterCont($sub_id, $chapter_name);
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
                    <p>Duration <span><?= $exams['duration'] ?></span></p>
                    <p>Start From <span><?= $exams['start_time'] ?></span></p>
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
        $data = $this->getQuestionsContr($chapter_id);
        foreach ($data as $qts) {
            $a_data = $this->getEditedQuestionsContr($qts['id']) ?>
            <div class="question" id="questions">
                <p class="question-body">
                    <?= $qts['question_text'] ?>
                        <a type="button"  class="edit-btn" id="question" href="edit_question.php?question_id=<?= $qts['id'] ?>"><i class="fa fa-edit" ></i></a>                                                                                                                                                                                                                                               
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

    public function showQuestionToEdit($question_id)
    {
        $data = $this->getQuestionToEdit($question_id);
        foreach ($data as $qts) {
            $a_data = $this->getEditedQuestionsContr($qts['id']) ?>
            <div class="question" id="questions">

                <!-- question_text -->
                <p class="edit-question-body"><input class="edit-question-input" type="text" value="<?= $qts['question_text'] ?>" name="question_text" placeholder="Type Question Head"></p>
                <input type="hidden" name="question_id" value="<?= $qts['id'] ?>">
                <input type="hidden" name="type" value="<?= $qts['type'] ?>">
                
                <!-- answers -->
                <ol type="a">
                    <?php foreach ($a_data as $answer) { ?>
                        <li class="edit-list">
                            <input class="edit-answer" type="text" name="answer" 
                            value="<?= $answer['answer'] ?>" placeholder="<?php echo "Type Answer"  ?>">
                        </li>
                    <?php } ?>
                </ol>


                <?php foreach ($a_data as $answer) { ?>
                    <input type="hidden" class="edit-answer" value="<?= $answer['is_correct'] ?>" name="is_correct" placeholder="Correct Answer">
                    <input type="hidden" class="edit-answer" value="<?= $answer['difficulty'] ?>" name="difficulty" placeholder="Difficulty">
                <?php } ?>
                
                <!-- correct_answer-->
                <p class="question-select">Answer:
                    <select name="is_correct">
                        <?php foreach ($a_data as $answer) { 
                            $is_correct = $answer['is_correct'];
                            if ($is_correct == "1") {?>
                                <option value="<?= $answer['answer']?>" selected><?= $answer['answer']?></option>
                                <?php } else if ($is_correct == "0"){ ?>
                            <option value="<?= $answer['answer']?>"><?= $answer['answer']?></option>
                            <?php }
                        } ?>
                    </select>
                </p>

                <!-- difficulty-->
                <p class="question-select">Difficulty:
                    <select name="difficulty">
                    <option value="easy"<?php if($answer['difficulty']== 'easy'){ echo 'selected'; }?>>Easy</option>
                    <option value="meduim"<?php if($answer['difficulty']== 'meduim'){ echo 'selected'; }?>>Meduim</option>
                    <option value="hard"<?php if($answer['difficulty']== 'hard'){ echo 'selected'; }?>>Hard</option>
                    </select>
                </p>
                
                <div class="modal-footer">
                    <button type="sumbit" class="" name="edit" >Save Chages</button>
                    <!-- <button type="sumbit" class="" name="edit">Delete</button> -->
                </div>

            </div>
            
            <?php    
            }
    }

    public function editQuestions($question_text, $difficulty, $question_id)
    {
        
        $this->editQuestionsContr($question_text, $difficulty, $question_id);
    }
     
    public function editAnswers($answer, $is_correct, $question_id)
    {
        $this->editAnswersContr($answer, $is_correct, $question_id);
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
                <img class=" profile-picture profile-img prof-img" src="../profile-images/professors/<?= $details['image'] ?>">
                <?php }
            else{
                ?>
                <img class=" profile-picture profile-img prof-img" src="../profile-images/professors/<?= "prof.png"?>">
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