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
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/after-submition.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php') ?>
        <section class="section-one">
            <div class="thanks-section">
                <div class="inside-thanks-section">
                    <h4>Thanks For Your Efforts</h4>
                    <p>
                        You successfully submitted
                        Your exam. Click on view
                        result to get you result, Great Job.
                    </p>
                    <button onclick="show()">View Result</button>
                    <div class="result magictime swashIn">
                        <p>
                            Your Result: <span><?php echo $student->showResultView($_GET['exam_id'], $_SESSION['id']) ?></span> / <span><?php echo $student->showTotal($_GET['exam_id']) ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-right">
                <img src="img/success.png" alt="img" />
            </div>

        </section>





    </div>
    <!--Scripts part-->
    <script>
        let x = document.querySelector('.result');

        function show() {
            if (x.style.display = 'none') {
                x.style.display = 'block'

            } else {
                x.style.display = 'none'
            }
        }
    </script>

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>

</body>

</html>