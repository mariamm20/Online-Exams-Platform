<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();
if (isset($_GET['id'])) {
    echo $sub_id = $_GET['id'];
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
    <link rel="stylesheet" href="css/prof-results.css" />
</head>

<body>
    <div id="app">

        <?php include('../includes/header.inc.php'); ?>

        <section class="container subjects-chapters-section" data-aos="fade-up">
            <div class="left">

                <div class="heading-notify">
                    <p> <i class="fa fa-book" aria-hidden="true"></i> Your Subjects</p>
                </div>
                <div>
                    <ol class="list-group list-group-numbered">

                        <?php $professor->showSubjects(); ?>

                    </ol>
                </div>

            </div>
            <div class="right">
                <div class="img-right">
                    <p>No Subject Selected Yet!</p>
                    <img src="img/10.png" />
                </div>

                <div class="heading-notify chapters d-none">
                    <p><i class="fa fa-history" aria-hidden="true"></i>
                        <span></span> Exams History
                    </p>

                </div>

                <div class="names-chapters d-none" id="exams">
                    <ol class="list-group list-group-numbered">

                        <?php include('../includes/result_history.inc.php'); ?>

                    </ol>
                </div>


            </div>
        </section>





    </div>
    <!--Scripts part-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/prof-results.js"></script>



    <script>
        $('.list-group-item').click(function() {
            var subject_id = $(this).val();
            $.ajax({
                url: '../includes/result_history.inc.php',
                method: 'POST',
                data: {
                    subject_id: subject_id
                },
                success: function(data) {
                    $('#exams').html(data);
                    console.log(subject_id)
                }
            });
        });
    </script>


</body>

</html>