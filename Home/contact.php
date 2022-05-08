<?php
session_start();
include('../Controllers/dbconnection.class.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link rel="icon" href="../assests/cartoon.ico"/>
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>
    <div id="app">
    <?php include('../includes/header.inc.php') ?>

        <section class="section-one">
            <div class="image-section" data-aos="fade-left">
                <img src="img/7.jpg" alt="img" />
            </div>
            <div class="form-section">
                
            
            <form action="../includes/contact.php" method="post">
                    <h4>Contact Us</h4>
                    <fieldset class="inputs">
                        <input type="text" name="name" placeholder="Your Name" required />
                        <input type="email" name="email" placeholder="Email" required />
                        <textarea name="msg" placeholder="What is your problem?" required></textarea>
                        <div id="btn-div">
                            <button name="send">Send</button>
                        </div>

                    </fieldset>
                </form>


            </div>
        </section>

    </div>
    <!--Scripts part-->
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>