<?php

if(isset($_POST['register']))
{
    $user_name = $_POST['name'];
    $academic_id = $_POST['academic_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "professor";


    include('../Controllers/dbconnection.class.php');
    include('../Controllers/registerCont.class.php');
    include('../Views/registerView.class.php');

    $register = new ProfRegisterView($user_name,$email,$password,$academic_id);
    $register->userRegisteration();

    header('location: ../Home/prof-login.php?error=none');

}