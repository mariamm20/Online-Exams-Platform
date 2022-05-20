<?php
if(isset($_POST['prof_edit']))
{
    $prof_id = $_POST['prof_id'];
    $user_name =  $_POST['user_name'];
    $academic_id =  $_POST['academic_id'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $professor = new professorView();
    
    $professor->editProfDetails($user_name, $academic_id, $email, $hashedPassword, $prof_id);
    header('location:../Home/prof_setting.php?EditedSuccessfullyid='.$prof_id );
}

if(isset($_POST['upload']))
{
    $prof_id = $_POST['prof_id'];
    $image =  $_FILES['image']['name'];
    $tmp = $_FILES["image"]["tmp_name"];
    $img = "../Home/img/" .$image;

    move_uploaded_file($tmp, "../Home/img/".$image);

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $professor = new professorView();
    $professor->uploadImage($image, $prof_id);
    
    header('location:../Home/prof_setting.php?ImageUploaded_id='.$prof_id );
}
