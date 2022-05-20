<?php
session_start();
if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $msg = $_POST['msg'];

   include('../Controllers/dbconnection.class.php');
   include('../Controllers/HomeCont.class.php');
   include('../Views/HomeView.class.php');

   $homeview = new HomeView();
   $homeview->sendContact($id, $name, $email, $msg);

   if($_SESSION['role'] == "professor")
   {
      header('location: ../Home/contact.php?sent&professor');
   }
   else{
      header('location: ../Home/contact.php?sent&student');
   }
   
}
