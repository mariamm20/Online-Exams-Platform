<?php
if(isset($_POST['save']))
{
    $level_id = $_POST['level_id'];
    $dept_name = $_POST['dept_name'];

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminview = new AdminView();
    $adminview->addDepartment($dept_name, $level_id);
    header('location: ../levels.php?departmentadded');
}