<?php
if(isset($_POST['subject_id']))
{
    $sub_id = $_POST["subject_id"];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();
    $student->showStudChapters($sub_id);

}
else{
    echo "failed";
}
