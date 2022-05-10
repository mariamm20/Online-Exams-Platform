<?php
if(isset($_POST['subject_id']))
{
    $sub_id = $_POST["subject_id"];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $professor = new professorView();
    $professor->showChapters($sub_id);

}
else{
    echo "failed";
}
