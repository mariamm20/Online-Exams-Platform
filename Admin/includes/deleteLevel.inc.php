<?php
if(isset($_POST['delete']))
{
    $level_id = $_POST['level_id'];
    
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->deleteLevel($level_id);
    header('location: ../levels.php?level_deleted');

}
