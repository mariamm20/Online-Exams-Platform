<?php
include("../Controllers/dbconnection.class.php");
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
    <link rel="icon" href="../assests/head.ico"/>
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
                <span class="fs-4 title"><a class="navbar-brand" href="../Home/home.php">
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
                            <a class="nav-link" href="pre-register.php">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stud-login.php">
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
                <form action="../includes/stud-register.inc.php" method="Post">
                    <h4 id="role">Registration  <?php include('../includes/RegisterHandling.inc.php') ?></h4>
                    <fieldset class="inputs">
                        <input type="text"  placeholder="Your Name" name="name"; />
                        
                        <input type="text" placeholder="Acadimic ID" name="academic_id" />
                       
                        <input type="email" placeholder="Email" name="email"/>
                        
                        <input type="password" placeholder="Password" id="eye" name="password"/>
                        <button onclick="event.preventDefault(),myFunction()"  class="view-password"><i class="fa-solid fa-eye"></i></button>
                    
                        
                        <select name="level" class="level_name" id="nameoflevel"   >
                            <option selected disabled>Choose Level</option>
                            <?php
                                $student->showLevels();
                            ?>
                        </select>
                       
                        <select name="dept" id="department">
                            <option selected disabled>Choose Department</option>
                            <?php
                            
                            include('../includes/getDepartmenr.inc.php');
                              
                            ?>
                            
                        </select>
                        
                        <div id="btn-div">
                            <button name="register">Register</button>
                        </div>
                        <p>All ready have an account?<a href="stud-login.php"> Log In</a></p>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>

    <!--Scripts part-->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="js/register.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>

    <script>
        
   
    $("#nameoflevel").on("change",function(){
      var levelId = $(this).val();
      console.log(levelId)
      $.ajax({
        url :"../includes/getDepartmenr.inc.php",
        type:"POST",
        cache:false,
        data:{levelId:levelId},
        success:function(data){
          $("#department").html(data);
          
        }
      });
    })

    </script>
</body>

</html>