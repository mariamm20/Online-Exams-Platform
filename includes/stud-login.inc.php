<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('../Controllers/dbconnection.class.php');
    include('../Controllers/stud-loginCont.class.php');
    include('../Views/stud-loginView.class.php');

    $login = new LoginView($email, $password);
    $login->userLogin();
    header("location: ../Home/home.php?error=none");

}