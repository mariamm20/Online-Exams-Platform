<?php
if(isset($_POST['levelId']))
{
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();
    echo $_POST['levelId'];
        $student->showDept($_POST['levelId']);

}

