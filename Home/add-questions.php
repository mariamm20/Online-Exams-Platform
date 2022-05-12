<?php
session_start();
if(isset($_GET['ch_id']))
{
    //echo $_GET['ch_id'];
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
        <header class="container" data-aos="fade-down">
            <nav class="navbar navbar-expand-lg vertical">
                <span class="fs-4 title"><a class="navbar-brand" href="../Professor/professor.html">
                        Online Exams <br />
                        <span class="platform-word">Platform </a>
                </span>

                </a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="nav">
                        <li class="nav-item register-color">
                            <a class="nav-link" href="#">
                                Create Exam
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../FAQ/fqa.html">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Contact/contact.html">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Professor/professor.html">
                                <img src="img/prof.png" class="profile-img">
                                <span class="profile-text">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">
                <div class="heading-notify add-quest">
                    <p>Add Questions</p>
                </div>
                <div class="subj-name">
                    <p>
                        <span>Physics</span>: <span>Motion</span>
                    </p>
                </div>
                <div class="quest">
                    
                </div>

            </div>

        </section>





    </div>
    <!--Scripts part-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/add-questions.js"></script>
</body>

</html>