<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();

//echo $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/professor.css" />
</head>

<body>
    <?php

    ?> <div id="app">

        <?php include('../includes/header-prof.inc.php'); ?>

        <section class="container" data-aos="fade-up">
            <div class="top">
                <div class="top-left">
                    <div class="buttons">
                        <button onclick="location.href='subjects.php'"><i class="fa-solid fa-book"></i> Questions Bank</button>
                        <button onclick="location.href='prof-results.php'"><i class="fa-solid fa-history"></i> Results History</button>
                    </div>
                </div>
                <div class="top-right">
                    <div class="details">
                        <?php $professor->professor($_SESSION['id']) ?>
                        <?php $professor->uploadImageView(); ?>
                        <!--<img src="img/prof.png" class="prof-img" />-->
                        <!-- <div class="change-pic">
                            <p>
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img" style="display:none;"/>
                                <label for="img">Change profile picture</label>
                        </p>
                        </div> -->

                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="bottom-left">
                    <div class="heading-notify notify">
                        <p> <i class="fa-solid fa-bell"></i> Notifications <span>(<?php $professor->getExams($_SESSION['id']); ?>)</span> </p>
                    </div>
                    <div class="notify-body">
                        <?php $professor->getNotifications($_SESSION['id']); ?>
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="heading-notify">
                        <p>Important Numbers</p>
                    </div>
                    <div class="numbers-body">
                        <p>Created Exams <span><?php $professor->getExams($_SESSION['id']); ?></span></p>
                        <p>Success Rate <span>80%</span></p>
                        <p>Failure Rate <span>20%</span></p>
                    </div>

                </div>
            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>