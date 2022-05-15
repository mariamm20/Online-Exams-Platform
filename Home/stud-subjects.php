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
    <link rel="stylesheet" href="css/stud-subjects.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header_stud.inc.php') ?>
        <section class="container subjects-chapters-section" data-aos="fade-up">
            <div class="left">

                <div class="heading-notify">
                    <p> <i class="fa fa-book" aria-hidden="true"></i> Your Subjects</p>
                </div>
                <div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item" onclick="show()">Physics</li>
                        <li class="list-group-item">Software Design and Archeticture</li>
                        <li class="list-group-item">Software Development</li>
                        <li class="list-group-item">Requirement Engineering</li>
                    </ol>
                </div>

            </div>
            <div class="right">
                <div class="img-right">
                    <p>No Chapters To Show Yet!</p>
                    <img src="img/10.png" />
                </div>

                <div class="heading-notify chapters d-none">
                    <p><i class="fa fa-bookmark" aria-hidden="true"></i> <span>Physics</span> Chapters</p>

                </div>
                <div class="names-chapters d-none">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item" onclick="window.location.href='../Home/stud-question-bank.php'">Motion</li>
                        <li class="list-group-item">Acceleration</li>
                        <li class="list-group-item">Newton's first low</li>
                        <li class="list-group-item">Light beams</li>
                        <li class="list-group-item">Electricity/li>

                    </ol>
                </div>


            </div>


        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/stud-subjects.js"></script>
</body>

</html>