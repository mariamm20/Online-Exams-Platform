<?php
if(isset($_POST['levelId']))
{
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    echo $_POST['levelId'];
    $adminview->showDeptName($_POST['levelId']);
}