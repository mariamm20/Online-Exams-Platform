<?php

if(isset($_POST['login']))
    {

        // get the data from the user

        $email = $_POST['email'];
       
        $password = $_POST['password'];
       
        
        
        // includes
        include "../Controllers/dbconnection.class.php";
        include "../Controllers/LoginCont.class.php";
        include "../Views/LoginView.class.php";

        // make an object of the "Signup" class
        $LoginView = new LoginView($email,$password); 

        // running error handlers and user signup
        $LoginView->userLogin();

        // going back to front page 
        if($_SESSION['role'] == "admin"){
            header("location: ../admin/admin.php");

        }else{
            header("location: ../Home/home.php?error=none");
        }





    }