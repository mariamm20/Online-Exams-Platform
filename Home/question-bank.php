<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();

if (isset($_GET['chapter_id'])) {
    $chapter_id = $_GET['chapter_id'];
    //echo $chapter_id;
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
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/question-bank.css" />
</head>

<body>
    <div id="app">

        <?php include('../includes/header.inc.php'); ?>

        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">

                <div class="heading-notify chapters" id="chapters">
                    <p>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <span style="font-weight: bold;"> <?php $professor->showChapterName($chapter_id); ?> Questions</span>
                        <span>(<?php $professor->showQuestionsNumber($chapter_id); ?>)</span>
                    </p>
                    <button data-bs-toggle="modal" data-bs-target="#add-chapter" onclick=" window.location.href = 'add-questions.php?ch_id=<?= $chapter_id ?>'">Add Questions</button>
                </div>
                <?php $professor->showQuestions($chapter_id); ?>
            </div>


            <!-- remove question  -->
            <div class="modal magictime swashIn" id="remove-question" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../includes/deleteQts.inc.php" method="post">
                            <div class="modal-body">
                                <p class="text-start fw-bolder">Are you sure to delete this question? </p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="chapter_to_show" name="chapter_id">
                                <input type="hidden" id="question_to_delete" name="question_id">
                                <button type="submit" name="delete">Yes</button>
                                <button type="submit" data-bs-dismiss="modal">Cancel</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>



        </section>
    </div>



    <!--Scripts part-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/question-bank.js"></script>

    <script>
        $(document).on('click', '.remove_question', function() {
            $("#question_to_delete").val($(this).data('did'));
        });
    </script>

    <script>
        $(document).on('click', '.remove_question', function() {
            $("#chapter_to_show").val($(this).data('cid'));
        });
    </script>

</body>

</html>