<?php
if(isset($_POST['reject']))
{
    $id = $_POST['id'];

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->rejectRequest($id);
    header('location: ../requests.php');
}

if(isset($_POST['cancel']))
{
    header('location: ../requests.php');
}