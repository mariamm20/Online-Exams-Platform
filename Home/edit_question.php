<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();

if (isset($_GET['question_id'])) {
    $question_id = $_GET['question_id'];
    //echo $question_id = $_GET['question_id'];
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
    <link rel="stylesheet" href="css/question-bank.css" />
</head>

<body>
    <div id="app">

    <?php include('../includes/header_prof.inc.php'); ?>

        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">

                <div class="heading-notify chapters" id="chapters">
                    <p>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <span style="font-weight: bold;"> Edit Question </span>
                        <span>(<?php echo $question_id;?>)</span>
                    </p>
                    <!-- <button data-bs-toggle="modal" data-bs-target="#add-chapter" onclick=" window.location.href = 'add-questions.php'">Add Questions</button> -->
                </div>

                <form action="../includes/editQts.inc.php" method="POST">
                    <?php $professor->showQuestionToEdit($question_id); ?>
                </form>

            </div>


        </section>
    </div>



    <!--Scripts part-->
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/question-bank.js"></script>

    

</body>

</html>