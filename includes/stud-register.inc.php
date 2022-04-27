<?php

if(isset($_POST['register']))
{
    $user_name = $_POST['name'];
    $academic_id = $_POST['academic_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $department = $_POST['dept'];



    include('../Controllers/dbconnection.class.php');
    include('../Controllers/registerCont.class.php');
    include('../Views/registerView.class.php');

    $register = new StudRegisterView($user_name,$email,$password,$academic_id,$level,$department);
    $register->userRegisteration();
    header('location: ../Home/stud-login.php?error=none');



}