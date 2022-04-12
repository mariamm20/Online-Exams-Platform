<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link rel="icon" href="../assests/cartoon.ico"/>
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/register.css" />
</head>

<body>
    <div id="app">
        <header class="container" >
            <nav class="navbar navbar-expand-lg">
                <span class="fs-4 title"><a class="navbar-brand" href="home.html">
                                    Online Exams <br />
                            <span class="platform-word">Platform </a>
    </span>
                        
                    </a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="nav">
                        <li class="nav-item register-color">
                            <a class="nav-link" href="register.php">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                Login
                            </a>
                        </li>
                        <li class="nav-item" >
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
            <div class="image-section" data-aos="fade-right">
                <img src="img/4.png" alt="img" />
            </div>
            <div class="form-section">
                <form action="../includes/Register.inc.php" method="Post">
                    <h4>Registration <?php include('../includes/RegisterHandling.inc.php') ?> </h4> 
                    <fieldset class="inputs">
                        <input type="text"  placeholder="Your Name" name="user_name" />
                        
                        <input type="text" placeholder="Acadimic ID" name="academic_id" />
                       
                        <input type="text" placeholder="Password in Acadimic ID" name="id_password" />
                       
                        <input type="email" placeholder="Email" name="email" />
                        
                        <input type="password" placeholder="Password" name="password" />
                        
                        <input type="password"  placeholder="Repeat Password" name="repeated_pass"/>
                      
                        <select name="role">
                            <option value="" disabled selected>Choose Role</option>
                            <option value="doctor">Doctor</option>
                            <option value="student">Student</option>
                        </select>
                        
                        
                        <div id="btn-div">
                            <button name="register">Register</button>
                        </div>
                        <p>All ready have an account?<a href="login.php"> Log In</a></p>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>

    <!--Scripts part-->
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>