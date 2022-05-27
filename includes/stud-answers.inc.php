<?php
session_start();
if (isset($_POST['submit']) || isset($_GET['submit'])) {
    echo $student_id = $_SESSION['id'];
    echo $exam_id = $_GET['exam_id'];
    echo "<br>";
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    include('../Controllers/examCont.class.php');
    include('../Views/examView.class.php');
    $exam = new examView();

    $student = new studentView();
    $counter = 0;
    $totalMark = 0;

    foreach ($_POST as $key => $value) {
        echo $key . " => " . $value . "</br>";

        echo "</br>";
        if ($key == 'submit') {
            break;
        }
       
        $student->addAnswers($student_id, $exam_id, $key, $value);

        $array = array($student->questionMark($key, $exam_id));
        foreach ($array as $result) {
            echo intval($result);
            $counter += $result;
        }

        $totalarray = array($student->showMark($key));
        foreach ($totalarray as $total) {
            echo intval($total);
            $totalMark += $total;
        }

    }
    echo $counter;
    echo $totalMark;
    $exam->setMark($exam_id, $totalMark);
    // student result
    $student->addResult($student_id, $exam_id, $counter);
    header('location: ../Home/after-submition.php?exam_id=' . $exam_id . '&result=' . $counter . '&total='. $totalMark);
}
