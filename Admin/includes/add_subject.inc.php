<?php
if(isset($_POST['save']))
{
    $id = $_POST['prof_id'];
    $subject_name = $_POST['subject'];
    echo $id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->addSubject($id, $subject_name);
    header('location: ../professors.php?added');
}
