<?php
include('../Controllers/dbconnection.class.php');
include('../Controllers/AdminCont.class.php');
include('../Views/AdminView.class.php');
$adminview = new AdminView();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link href="../assests/magic-master/dist/magic.min.css" rel="stylesheet" />
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/admin.css" />

</head>

<body>
    <div id="app">
        <div class="d-flex main" data-aos="zoom-in">

            <?php
            include('includes/adminheader.inc.php');
            ?>



            <section class="container content ">
                <div class="title">Dashboard</div>
                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-info">Professors</p>
                                <p class="number"><?php $adminview->showProfessorsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category">Students</p>
                                <p class="number"><?php $adminview->showStudentsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-warning">Requests</p>
                                <p class="number"><?php $adminview->showRequestsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-success">Finished Exams</p>
                                <p class="number"><?php $adminview->showFinishedExamsNum(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-primary">Success</p>
                                <p class="number"><?php $adminview->showSuccessExamsNum() ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-danger">Failure</p>
                                <p class="number">0</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-img">
                    <img src="img/dashboard.jpg" height="160" />
                </div>
            </section>
        </div>
    </div>
    </div>
    <!--Scripts part-->
    <script src="js/admin.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>