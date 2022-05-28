<?php
if(isset($_POST['edit']))
{
    $chapter_id = $_POST['chapter_id'];
    $question_id = $_POST['question_id'];
    $question_text = $_POST['question_text'];
    $difficulty = $_POST['difficulty'];
    $mark = $_POST['mark'];
    //$is_correct = $_POST['is_correct'];
    //$answer = $_POST['answer'];
    echo $correct_answer_id = $_POST['correct_answer_id'];
    
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $proffesor = new ProfessorView();

    $proffesor->editQuestions($question_text, $difficulty, $mark, $question_id);
    
  
   
    //print_r($_POST);
    foreach($_POST as $id => $answer)
    {
        echo $id . " => " . $answer . "</br>";
        $proffesor->editAnswers($answer, $id);
    }

    $proffesor->editCorrectAnswer($correct_answer_id);
    header('location:../Home/question-bank.php?chapter_id='.$chapter_id );
} 
else{ echo "failed";}