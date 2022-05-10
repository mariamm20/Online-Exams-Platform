<?php
if(isset($_POST['save']))
{
    $sub_id = $_POST['sub_id'];
    $chapter_name = $_POST['name'];
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');

    $professor = new professorView();
    $professor->addChapter($sub_id, $chapter_name);
    header('location:../Home/subjects.php?chapteradded');
}