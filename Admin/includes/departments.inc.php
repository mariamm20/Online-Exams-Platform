<?php

include('../../Controllers/dbconnection.class.php');
include('../../Controllers/AdminCont.class.php');
include('../../Views/AdminView.class.php');
$adminview = new AdminView();
$level_id = $_POST['level_id'];
$dept_id = $_POST['dept_id'];
$dept_name = $_POST['dept_name'];

if(isset($_POST['save']))
{
    $adminview->addDepartment($dept_name, $level_id);
    header('location: ../departments.php?department_added');
}

if (isset($_POST['edit'])) {
    
    $adminview->editDept($dept_name, $dept_id);
    header('location: ../departments.php?department_edited');
}

if(isset($_POST['delete']))
{
    $adminview->deleteDepartment($dept_id);
    header('location: ../departments.php?department_deleted');
}

