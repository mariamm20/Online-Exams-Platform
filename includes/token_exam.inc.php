<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/StudentCont.class.php');
include('../Views/StudentView.class.php');
$student = new studentView();
$t=time();
date_default_timezone_set('Africa/Cairo');

if($student->takenExams($_GET['exam_id'], $_SESSION['id']) == false)
{
    header('location: ../Home/student.php?alreadypassed');
}

elseif($_GET['exam_date'] > date("Y-m-d"))
{
    header('location: ../Home/student.php?notStarted');
}
elseif($_GET['exam_date'] < date("Y-m-d"))
{
    header('location: ../Home/student.php?hasended');
}
elseif($_GET['exam_time'] > date("G:i:s") )
{
    echo date("G:i:s");
    header('location: ../Home/student.php?timenotstarted');
}


else
{
    header('location: ../Home/stud-exam.php?exam_id='.$_GET['exam_id'] . '&duration=' . $_GET['exam_duration'] . '&start_time=' . $_GET['exam_time']);
}





