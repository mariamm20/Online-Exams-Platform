<?php 
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link href="../assests/magic-master/dist/magic.min.css" rel="stylesheet" />
    <link rel="icon" href="../assests/cartoon.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/after-creation.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php') ?>
        <section class="section-one">
            <div class="thanks-section">
                <div class="inside-thanks-section">
                <h4>Thanks For Your Efforts</h4>
                <p>
                    Your students will get a <br>
                    notification about this <br>
                    exam details, Great Job.
                </p>
                <button onclick="event.preventDefault() ;  window.location.href='professor.php'">Return Home</button>
            </div>
            </div>
            <div class="image-section" data-aos="fade-right">
                <img src="img/created.png" alt="img" />
            </div>

        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>

</body>

</html>