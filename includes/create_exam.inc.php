<?php

if(isset($_POST['create_exam']))
    {
        $exam_name = $_POST['exam_name'];
        $subject_id = $_POST['sub_name'];
        $exam_date = $_POST['exam_date'];
        $exam_start = $_POST['exam_start'];
        $duration= $_POST['duration'];
        $total_mark = $_POST['total_mark'];
        
        include('../Controllers/dbconnection.class.php');
        include('../Controllers/examCont.class.php');
        include('../Views/examView.class.php');
        $exam = new examView();
        $exam->createExam($subject_id, $exam_name,$exam_date, $exam_start,$duration, $total_mark);
        header('location: ../Home/second-creation-form.php?subject_id='.$subject_id.'&exam_name='.$exam_name);
    }
