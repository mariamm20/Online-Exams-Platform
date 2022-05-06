<?php
if(isset($_POST['save']))
{
    $name = $_POST['subject_name'];
    $level_id = $_POST['level_id'];
    $dept_id = $_POST['dept_id'];
    echo $name;
    echo $level_id;
    echo $dept_id;

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminview = new AdminView();
    $adminview->addDeptSubject($name, $level_id, $dept_id);
    header('location: ../levels.php?subjectadded');
}