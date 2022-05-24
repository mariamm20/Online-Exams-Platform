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
    <link rel="stylesheet" href="css/pre-register.css" />
</head>

<body>
    <div id="app">
        <header class="container">
            <nav class="navbar navbar-expand-lg">
                <span class="fs-4 title"><a class="navbar-brand" href="../Home/home.php">
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
                            <a class="nav-link" href="pre-register.php">
                                Register
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../Login/login.php">
                                Login
                            </a>
                        </li> -->
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
            
            <div class="professor" data-aos="fade-right">
                <img src="img/9.jpg" alt="img">
                
            </div>
            <div class="student" data-aos="fade-left">
                <p>Register As </p>
                <div class="cat w-100">
                <button onclick="location.href='prof-register.php?role=prof'; /*sessionStorage.setItem('role','Prof');*/" class="btn-professor">
                    Professor
                </button>
                <button onclick="location.href='stud-register.php?role=stud';/* sessionStorage.setItem('role','Student');*/" class="btn-student">
                    Student
                </button>
            </div>
            </div>
        </section>


        <!--Scripts part-->
        <script src="../assests/node_modules/aos/dist/aos.js"></script>
        <script src="../assests/global.js"></script>
        <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>