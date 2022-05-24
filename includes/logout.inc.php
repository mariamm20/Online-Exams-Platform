<?php

session_start();
if(isset($_SESSION['id']))
{
    
    if($_SESSION['role'] == 'student')
    {   session_unset();
        session_destroy();
        
        header('location:../Home/stud-login.php');
    }
    elseif($_SESSION['role'] == 'professor')
    {   session_unset();
        session_destroy();
       
        header('location:../Home/prof-login.php');
    }
    elseif($_SESSION['role'] == 'admin')
    {   session_unset();
        session_destroy();
       
        header('location:../Home/home.php');
    }
}
