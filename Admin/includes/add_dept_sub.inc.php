<?php
if(isset($_POST['save']))
{
    $subject_id = $_POST['subject_id'];
    $dept_id = $_POST['dept_id'];
    echo $subject_id;
    echo $dept_id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();

    $adminview->addDeptSub($subject_id, $dept_id);
    header('location: ../levels.php?added');
}
