<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


    include('../Controllers/dbconnection.class.php');
    include('../Controllers/LoginCont.class.php');
    include('../Views/LoginView.class.php');

    
    $login = new ProfLoginView($email, $password);
    $login->ProfLogin();
    if($_SESSION['role'] == 'professor'){
        header("location: ../Home/home.php?error=none0");

    }

    

    

}