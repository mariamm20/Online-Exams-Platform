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
    <?php include('../includes/header_stud.inc.php') ?>
        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">
                <div class="heading-notify chapters middle">
                    <p><span>Motion</span> Exam</p>
                </div>
                <div class="timer">
                    Timer : <span>1:44</span>
                </div>
                <div class="question">
                    <p class="question-body">
                        1- In a uniform cicular motion:
                    </p>
                    <ol type="a">
                        <li>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="a">
                            <label class="form-check-label" for="a">
                                Velocity is constant
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="b">
                            <label class="form-check-label" for="b">
                                Distance is constant
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="c">
                            <label class="form-check-label" for="c">
                                Displacement is constant
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="d">
                            <label class="form-check-label" for="d">
                                Speed is constant
                            </label>
                        </li>
                    </ol>


                </div>
                <div id="btn-div" >
                <button onclick="window.location.href='../Home/after-submition.php'">Submit</button>
            </div>
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