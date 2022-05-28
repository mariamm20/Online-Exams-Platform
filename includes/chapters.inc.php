<?php

include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();


if (isset($_POST['save'])) {
    $sub_id = $_POST['sub_id'];
    $chapter_name = $_POST['chapter_name'];
    $professor->addChapter($sub_id, $chapter_name);
    header('location:../Home/subjects.php?chapter_added');
}

if (isset($_POST['edit'])) {
    $chapter_name = $_POST['chapter_name'];
    $chapter_id = $_POST['chapter_id'];
    $professor->editChapter($chapter_name, $chapter_id);
    header('location: ../Home/subjects.php?chapter_edited');
}

if (isset($_POST['delete'])) {
    $chapter_id = $_POST['chapter_id'];
    $professor->deleteChapter($chapter_id);
    header('location: ../Home/subjects.php?chapter_deleted');
}
