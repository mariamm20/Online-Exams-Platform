<?php
session_start();
if(isset($_POST['submit']))
{
    echo $student_id = $_SESSION['id'];
    echo $exam_id = $_GET['exam_id'];
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();
    
    
    foreach($_POST as $key => $value)
    {
        echo $key . " => " . $value . "<br>";
        if($key == 'submit')
        {
            break;
        }
        $student->addAnswers($student_id, $exam_id, $key, $value);
        

    }
    // student result
    $student->addResult($student_id, $exam_id);
    header('location: ../Home/after-submition.php?exam_id='.$exam_id);


}