<?php
if(isset($_POST['save']))
{
    $prof_id = $_POST['prof_id'];
    $subject_id = $_POST['subject_id'];
    echo $prof_id;
    echo $subject_id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->addSubject($prof_id, $subject_id);
    header('location: ../professors.php?added');
}
