<?php
if(isset($_POST['save']))
{
    $level_name = $_POST['level_name'];

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminvview = new AdminView();
    $adminvview->addLevel($level_name);
    header('location: ../levels.php?leveladded');


}