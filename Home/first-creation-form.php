<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();

include('../Controllers/examCont.class.php');
include('../Views/examView.class.php');
$exam = new examView();
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
    <link rel="stylesheet" href="css/creation-form.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php'); ?>
        <section class="section-one">

            <img src="img/12.png" alt="img" />

            <div class="form-section">
                <form action="../includes/create_exam.inc.php" method="Post">
                    <div class="header-bg">
                        <h4 id="role">Creation Exam Form</h4>
                    </div>
                    <fieldset class="inputs">
                        <input type="text" placeholder="Exam  Name" name="exam_name" required/>

                        <select name="sub_name" required>
                            <option selected disabled value="">Choose Subject</option>
                            <?php
                            $exam->professorSubjects();
                            ?>

                        </select>
                        <input type="text" placeholder="Exam Date" onfocus="(this.type='date')" onblur="(this.type='text') ;" id="date" name="exam_date" required>
                        <input type="text" placeholder="Exam Start Time" onfocus="(this.type='time')" onblur="(this.type='text')" id="eye" name="exam_start" required/>
                        <input type="number" placeholder="Exam Duration" name="duration"  required/>
                       

                       

                        <!-- <input type="number" placeholder="Total Marks" name="total_mark" required /> -->



                        <div id="btn-div">
                            <button name="create_exam">Next</button>
                        </div>
                       
                    </fieldset>
                </form>
            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/creation-form.js"></script>
    <script src="../assests/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if(isset($_GET['existedexamname']))
        {?>
            <script>
            
            swal({
            title: 'You have already created an exam with the same name ',
            text: 'Ooops...',
            icon: 'error',
           
            
            showOkButton: true,
            })
            .then(() => {
            window.location.href = '../Home/first-creation-form.php' ;
            
            })
            </script>
        <?php  
        }
        ?>
    
</body>

</html>