<?php
if (isset($_POST['register'])) {
    $user_name =trim( $_POST['user_name']);
    $academic_id = $_POST['academic_id'];
    $id_password = $_POST['id_password'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeated_pass = $_POST['repeated_pass'];
    $role = $_POST['role'];
    

   

    include "../Controllers/dbconnection.class.php";
    include "../Controllers/RegisterCont.class.php";
    include "../Views/RegisterView.class.php";

    //  make an object of the "Signup" class
    $registerView = new RegisterView($user_name, $email, $password, $repeated_pass,$role, $academic_id,$id_password); 

    // running error handlers and user signup
    $registerView->userRegisteration();

    // going back to front page 
    header("location: ../Home/login.php?error=none");

}