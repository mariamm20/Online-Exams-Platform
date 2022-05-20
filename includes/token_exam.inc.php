<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/StudentCont.class.php');
include('../Views/StudentView.class.php');
$student = new studentView();


if($student->takenExams($_GET['exam_id'], $_SESSION['id']) == false)
{
    header('location: ../Home/student.php?alreadypassed');
}
else{
    header('location: ../Home/stud-exam.php?exam_id='.$_GET['exam_id']) ;
}


