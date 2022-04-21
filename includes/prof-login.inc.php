<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/prof-loginCont.class.php');
    include('../Views/prof-loginView.class.php');

    $login = new LoginView($email, $password);
    $login->userLogin();
    header("location: ../Home/home.php?error=none");

}