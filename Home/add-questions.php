<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();
include('../Controllers/StudentCont.class.php');
include('../Views/StudentView.class.php');
$student = new studentView();

if (isset($_GET['ch_id'])) {
    $chapter_id = $_GET['ch_id'];
}
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
    <link rel="stylesheet" href="css/add-questions.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php'); ?>
        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">
                <div class="heading-notify add-quest">
                    <p>Add Questions</p>
                </div>
                <div class="subj-name">
                    <p>
                        <span><?php $student->showChapterName($chapter_id) ?></span>
                    </p>
                </div>
                <div class="quest">

                </div>

            </div>

        </section>





    </div>
    <!--Scripts part-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/add-questions.js"></script>
</body>

</html>