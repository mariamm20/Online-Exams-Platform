<?php
if(isset($_POST['edit']))
{
    $chapter_id = $_POST['chapter_id'];
    $question_id = $_POST['question_id'];
    $question_text = $_POST['question_text'];
    $difficulty = $_POST['difficulty'];
    //$is_correct = $_POST['is_correct'];
    //$answer = $_POST['answer'];
    //$answer_id = $_POST['answer_id'];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $proffesor = new ProfessorView();

    $proffesor->editQuestions($question_text, $difficulty, $question_id);
    
    //$proffesor->editCorrectAnswer($answer,$answer_id);

    foreach ($_POST['answer_id'] as $key => $answer_id) {
        $answer_id = $_POST['answer_id'];
        $answer = $_POST['ansewer'][$key];
    
        $proffesor->editAnswers($answer, $answer_id);
    }

    header('location:../Home/question-bank.php?chapter_id='.$chapter_id );
} 
else{ echo "failed";}