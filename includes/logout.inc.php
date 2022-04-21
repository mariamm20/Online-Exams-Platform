<?php

session_start();
if($_SESSION['role'] == 'professor')
{
    session_unset();
    session_destroy();
    header('location:../Home/prof-login.php');
}
if($_SESSION['role'] == 'student')
{
    session_unset();
    session_destroy();
    header('location:../Home/stud-login.php');
}