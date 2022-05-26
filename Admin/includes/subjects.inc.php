<?php

include('../../Controllers/dbconnection.class.php');
include('../../Controllers/AdminCont.class.php');
include('../../Views/AdminView.class.php');
$adminview = new AdminView();
$level_id = $_POST['level_id'];
//$level_name = $_POST['level_name'];
$dept_id = $_POST['dept_id'];
$subject_name = $_POST['subject_name'];


if(isset($_POST['save']))
{
   $adminview->addDeptSubject($subject_name, $level_id, $dept_id);
    header('location: ../subjects.php?subject_added');
}

if (isset($_POST['edit'])) 
{
    $subject_id = $_POST['subject_id'];
    $adminview->editSubject($subject_name, $subject_id);
    header('location: ../subjects.php?subject_edited');
}

if(isset($_POST['delete']))
{
    $subject_id = $_POST['subject_id'];
    $adminview->deleteDeptSubject($subject_id);
    header('location: ../subjects.php?subject_deleted');
}

