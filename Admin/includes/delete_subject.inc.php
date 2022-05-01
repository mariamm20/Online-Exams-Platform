<?php
if(isset($_POST['delete']))
{
    $sub_id = $_POST['id'];
    $prof_id = $_POST['prof_id'];
    
    echo $sub_id;
    echo $prof_id;
    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');
    $adminview = new AdminView();
    $adminview->deleteSubject($sub_id, $prof_id);
   header('location: ../professors.php?subject_deleted');

}
