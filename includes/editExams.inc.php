<?php
if (isset($_POST['edit'])) {

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $professor = new professorView();

    $exam_id = $_POST['exam_id'];
    $exam_name = $_POST['exam_name'];
    $exam_date = $_POST['exam_date'];
    $exam_duration = $_POST['exam_duration'];
    $start_time = $_POST['start_time'];

    $professor->editAllExams($exam_name, $exam_date, $exam_duration, $start_time, $exam_id);
    header('location: ../Home/all-exams.php?exam_edited');
}
