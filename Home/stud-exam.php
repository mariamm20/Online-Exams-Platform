<?php
    session_start();
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/StudentCont.class.php');
    include('../Views/StudentView.class.php');
    $student = new studentView();
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
    <link rel="stylesheet" href="css/stud-exam.css" />
</head>

<body>
    <div id="app">
    <?php include('../includes/header_prof_stud.inc.php'); ?>
        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">
                <div class="heading-notify chapters middle">
                    <p><span><?php $student->showExamName($_GET['exam_id']); ?></span> Exam</p>
                </div>
                <div class="timer">
                    Timer : <span>1:44</span>
                </div>
                <form action="../includes/stud-answers.inc.php?exam_id=<?= $_GET['exam_id'] ?>" method="post">
               
                    <?php
                        $student->showQuestions($_GET['exam_id']);
                    ?>
               
                <div id="btn-div" >
                <button type="submit" name="submit">Submit</button>
            </div>
            </form>
    </div>

    </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/stud-exam.js"></script>
</body>

</html>