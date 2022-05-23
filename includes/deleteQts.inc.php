<?php
if(isset($_POST['delete']))
{
    $question_id = $_POST['question_id'];
    $chapter_id = $_POST['chapter_id'];

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $proffesor = new ProfessorView();
    $proffesor->deleteQuestion($question_id);

    header('location: ../Home/question-bank.php?chapter_id='.$chapter_id);
}
