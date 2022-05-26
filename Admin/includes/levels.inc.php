<?php
include('../../Controllers/dbconnection.class.php');
include('../../Controllers/AdminCont.class.php');
include('../../Views/AdminView.class.php');
$adminview = new AdminView();
$level_name = $_POST['level_name'];
$level_id = $_POST['level_id'];

if (isset($_POST['save'])) {
    $adminview->addLevel($level_name);
    header('location: ../levels.php?level_added');
}

if (isset($_POST['edit'])) {
    
    $adminview->editLevel($level_name, $level_id);
    header('location: ../levels.php?level_edited');
}

if (isset($_POST['delete'])) {
    $adminview->deleteLevel($level_id);
    header('location: ../levels.php?level_deleted');
}
