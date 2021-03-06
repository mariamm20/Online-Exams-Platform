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
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div id="app">
        <header class="container">
            <nav class="navbar navbar-expand-lg">
                <span class="fs-4 title"><a class="navbar-brand" href="home.php">
                        Online Exams <br />
                        <span class="platform-word">Platform </a>
                </span>

                </a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="nav">
                        <li class="nav-item register-color">
                            <a class="nav-link" href="pre-register.php">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stud-login.php">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fqa.php">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="section-one">
            <div class="image-section" data-aos="fade-left">
                <img src="img/5.png" alt="img" />
            </div>
            <div class="form-section">
                <form action="../includes/stud-login.inc.php" method="POST">
                    <h4>Log In <?php include('../includes/LoginHandeling.inc.php') ?> </h4>
                    <fieldset class="inputs">

                        <input type="email" placeholder="Email" name="email" />
                        <input type="password" placeholder="Password" name="password" id="eye" />
                        <button onclick="event.preventDefault(),myFunction()"  class="view-password"><i class="fa-solid fa-eye"></i></button>
                        <div id="btn-div">
                            <button name="login">Log In</button>
                        </div>
                        <p>Don't have an account?<a href="stud-register.php"> Register</a></p>
                    </fieldset>
                </form>
            </div>
        </section>




    </div>
    <!--Scripts part-->
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>
