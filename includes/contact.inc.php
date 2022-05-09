<?php
if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $msg = $_POST['msg'];

   include('../Controllers/dbconnection.class.php');
   include('../Controllers/HomeCont.class.php');
   include('../Views/HomeView.class.php');

   $homeview = new HomeView();
   $homeview->sendContact($id, $name, $email, $msg);

   header('location: ../Home/contact.php?sent');
}
