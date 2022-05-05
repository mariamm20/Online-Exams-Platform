<?php
if(isset($_POST['save']))
{
    $name = $_POST['level_name'];
    echo $name;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminvview = new AdminView();
    $adminvview->addLevel($name);
    header('location: ../levels.php?leveladded');


}