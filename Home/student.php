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
    <link rel="icon" href="../assests/cartoon.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/student.css" />
</head>

<body>
    <div id="app">
        <?php
            include('../includes/header_stud.inc.php')
        ?>

        <section class="container" data-aos="fade-up">
            <div class="top">
                <div class="top-left">
                    <div class="buttons">
                        <button onclick="location.href='../Home/stud-subjects.php'"><i class="fa-solid fa-book"></i> Questions Bank</button>
                        <button onclick="location.href='../Home/stud-results.php'"><i class="fa-solid fa-history"></i> Results History</button>
                    </div>
                </div>
                <div class="top-right">
                    <div class="details">
                        <div class="data">
                        <p class="name">
                            <?= $_SESSION['user_name'] ?>
                            <a href="#"><i class="fa fa-cog " aria-hidden="true"></i></a>
                        </p>
                        <p class="email">
                        <?= $_SESSION['email'] ?>
                        </p>
                        <p class="role">
                        <?=  "Level: " . $_SESSION['level'] ?>
                        </p>
                        </div>
                        <img src="img/student.png" class="prof-img" />
                        <div class="change-pic">
                            <p>
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img" style="display:none;"/>
                                <label for="img">Change profile picture</label>
                        </p>
                        </div>

                        

                    </div>
                </div>
            </div>
            <div class="middle">
                <p>
                    Avialable Exams  
                </p>
            </div>

            <div class="bottom" id="bottom">
                <div class="table-content">
          
                    <table class="table  table-responsive ">
                     
                    <thead class="heading-notify">
                      <tr>
                        <th scope="col" class="first-col">#</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col" class="last-col">Go To Exam</th>
                      </tr>
                    </thead>
                    <tbody>
                                <?php
                                    $student->showExams();
                                ?>
                    
                    </tbody>
                  </table>
            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>