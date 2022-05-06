<?php
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    echo $id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminview = new AdminView();
    $adminview->deleteDepartment($id);
    header('location: ../levels.php?profeesordeleted');
}
if(isset($_POST['cancel']))
{
    header('location: ../levels.php');
}