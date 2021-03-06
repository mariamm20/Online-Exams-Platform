<?php 
    session_start();
    include('../Controllers/dbconnection.class.php');    
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $professor = new professorView();
    
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
    <link rel="icon" href="../assests/head.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/home.css" />
</head>

<body>
    <div id="app">

        <?php include('../includes/header.inc.php') ?>

        <section class="landing">
            <div class="qoute">
                <p id="type">

                </p>
                <span>Christion D. Larson</span>
            </div>
            <div class="info">
                <p>
                    Your platform to create<br />
                    online exams for your<br />
                    students
                </p>

                <button class="glass" onclick="location.href='../Home/pre-register.php'">Get Started</button>

            </div>
        </section>
        <section class="landing section-two">
            <div class="mission">
                <h2>OUR MISSION</h2>
                <p>
                    Our mission is using one platform<br />
                    for examinations. Reduce paperwork<br />
                    and offering quick and accurate<br />
                    results.
                </p>
            </div>
            <div class="sleepy-img">
                <img src="img/1.png" alt="mission" />
            </div>
        </section>
        <section class="landing section-two section-three">
            <div class="sleepy-img">
                <img src="img/3.jpg" alt="mission" />
            </div>
            <div class="vision mission">
                <h2>OUR VISION</h2>
                <aside id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <aside class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </aside>
                    <aside class="carousel-inner">
                        <p class="carousel-item active">
                            Online Exam System is more popularly<br />
                            helps for our modern age system.
                        </p>
                        <p class="carousel-item">
                            It helps us to use the present technology<br />
                            into examiantion system.<br />
                        </p>
                        <p class="carousel-item">
                            Our mission is using one platform<br />
                            for examinations. Reduce paperwork.<br />
                        </p>
                    </aside>
                    <br />
                </aside>
            </div>
        </section>
        <section class="container section-four">
            <div class="about">
                <h2>ABOUT US</h2>
                <p>
                    Online examination System is conducting a test online to measure the
                    knowledge<br />
                    of the participants on a given topic. In the olden days everybody<br />
                    had to gather in a classroom at the same time to take an exam.
                </p>
            </div>
            <div class="about-part-two">
                <div>
                    <p>
                        With online examination students can do<br />
                        the exam online, in their own time and<br />
                        with their own device, regardless where<br />
                        they life. You online need a browser and<br />
                        internet connection.
                    </p>
                </div>
                <div class="img-class"><img src="img/2.png" alt="about" /></div>
            </div>
        </section>
        <section>
            <footer>
                <p>&copy;Copyright KSU 2021-2022</p>
            </footer>
        </section>

    </div>
    <!--Scripts part-->
    <script>
        var i = 0,
            text;
        text = "Something inside you that is greater than obstacle ... ";

        function typing() {
            if (i < text.length) {
                if (i == 25) {
                    document.getElementById("type").innerHTML += "<br/>";
                }
                document.getElementById("type").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, 50);
            }
        }
        typing();
    </script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="../assests/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if(isset($_GET['admisonlyareallowed']))
        {?>
            <script>
            
            swal({
            title: 'Admins Only Are allowed ',
            text: 'Thanks...',
            icon: 'error',
            timer: 3000,
            buttons: false,
            })
            .then(() => {
            window.location.href = '../Home/home.php' ;
            
            })
            </script>
        <?php  
        }
        ?>
</body>

</html>