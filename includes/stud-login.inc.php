<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


    include('../Controllers/dbconnection.class.php');
    include('../Controllers/LoginCont.class.php');
    include('../Views/LoginView.class.php');

    
    $login = new StudLoginView($email, $password);
    $login->StudLogin();
    if($_SESSION['role'] == 'student'){
        header("location: ../Home/home.php?error=none1");

    }

    

    

}