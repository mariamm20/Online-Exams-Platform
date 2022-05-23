<?php
if(isset($_POST['delete']))
{
    $chapter_id = $_POST['chapter_id'];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $proffesor = new ProfessorView();
    $proffesor->deleteChapter($chapter_id);

    header('location: ../Home/subjects.php?chapterdeleted');
}
