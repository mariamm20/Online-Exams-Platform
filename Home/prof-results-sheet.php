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
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/prof-results-sheet.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php'); ?>

        <section class="container" data-aos="fade-up">
            <div class="middle">
                <p>
                    Results History
                </p>
            </div>
            <div class="btn-div">
                <button type="button" onClick="window.print()" class="print"> <i class="fa-solid fa-print"></i> Print & Download</button>
            </div>
            <div class="table-content">

                <table class="table  table-responsive ">

                    <tbody>
                        <tr class="table-head">
                            <td scope="col">#</td>
                            <td scope="col">Student Name</td>
                            <td scope="col">Acadimic&nbsp;ID</td>
                            <td scope="col">Level</td>
                            <td scope="col">Department</td>
                            <td scope="col">Student Result</td>
                            <td scope="col">Total Marks</td>
                        </tr>

                        <?php $professor->showResultSheet($_GET['exam_id']); ?>

                    </tbody>
                </table>
            </div>


        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>