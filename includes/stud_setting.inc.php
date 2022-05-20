<?php
if(isset($_POST['stud_edit']))
{
    $stud_id = $_POST['stud_id'];
    $user_name =  $_POST['user_name'];
    $academic_id =  $_POST['academic_id'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $level =  $_POST['level'];
    $department =  $_POST['department'];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();

    $student->editStudDetails($user_name, $academic_id, $email, $hashedPassword, $level, $department, $stud_id);
    header('location:../Home/stud_setting.php?EditedSuccessfullyid='.$stud_id );

    if(empty($this->user_name) || empty($this->academic_id)  || empty($this->email) ||empty($this->password) ||empty($this->level) ||empty($this->department) )
        {
            header('location:../Home/stud_setting.php?emptyfields');
        }
    
} 

if(isset($_POST['upload']))
{
    $stud_id = $_POST['stud_id'];
    $image =  $_FILES['image']['name'];
    $tmp = $_FILES["image"]["tmp_name"];
    $img = "../Home/img/" .$image;

    move_uploaded_file($tmp, "../Home/img/".$image);

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();
    $student->uploadImage($image, $stud_id);
    
    header('location:../Home/stud_setting.php?ImageUploaded_id='.$stud_id );
}
