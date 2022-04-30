<?php
if(isset($_POST['yes']))
{
    $id = $_POST['id'];
    echo $id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->deleteProfessor($id);

    header('location: ../professors.php?deleted');
}