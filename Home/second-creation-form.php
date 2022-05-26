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

            <div class="form-section" data-aos="fade-left">
                <form action="../includes/exam_structure.inc.php" method="Post">
                    <div class="header-bg">
                        <h4 id="role">Creation Exam Form</h4>
                    </div>
                    <fieldset class="inputs chap">
                        <input type="hidden" value="<?= $_GET['subject_id'] ?>" name="subject_id">
                        <input type="hidden" value="<?= $_GET['exam_name'] ?>" name="exam_name">
                        <select name="chapter_id" required>
                            <option selected disabled value="">Choose Chapter</option>
                            <?php
                            $exam->showChapters($_GET['subject_id']);
                            ?>
                        </select>
                        <div class="header-bg quest-type">
                            <h4 id="role">Question Type </h4>
                        </div>
                        <div class="question-type-setting">
                            <div class=" type mcq">
                                <div class="type-heading">
                                    <input class="form-check-input" type="checkbox" value="" id="mcq" onclick="mcquestion()" name="mcq_check">
                                    <label class="form-check-label" for="mcq">
                                        MCQ
                                    </label>
                                </div>
                                <div class="type-input-fields quest-mcq">
                                    <input type="number" disabled placeholder="Number of Easy Questions" name="num_of_easy_questions" />
                                    <input type="number" disabled placeholder="Number of Medium Questions" name="num_of_medium_questions" />
                                    <input type="number" disabled placeholder="Number of Hard Questions" name="num_of_hard_questions" />
                                </div>
                            </div>
                            <div class="type true-false">
                                <div class="type-heading">
                                    <input class="form-check-input" type="checkbox" value="" id="tf" onclick="tfquestion()" name="TF_check">
                                    <label class="form-check-label" for="tf">
                                        True and False
                                    </label>
                                </div>
                                <div class="type-input-fields quest-tf">
                                    <input type="number" disabled placeholder="Number of Easy Questions" name="easy_questions" />
                                    <input type="number" disabled placeholder="Number of Medium Questions" name="medium_questions" />
                                    <input type="number" disabled placeholder="Number of Hard Questions" name="hard_questions" />
                                </div>
                            </div>
                        </div>





                        <div id="btn-div" class="create-btn">
                            <button type="submit" name="add">Add More Chapter</button>
                            <button class="create" type="submit" name="create">Create Exam</button>
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
    if(isset($_GET['noquestions']))
        {?>
            <script>
             const params = new URLSearchParams(window.location.search);
            const exam_name= params.get("exam_name");
            const subject_id = params.get("subject_id");

            swal({
            title: 'you did not enter any question! ',
            text: 'Thanks...',
            icon: 'error',
            timer: 3000,
            buttons: false,
            })
            .then(() => {
            window.location.href = '../Home/second-creation-form.php?subject_id='+subject_id +'&exam_name=' + exam_name ;
            
            })
            </script>
        <?php  
        }
        ?>
</body>

</html>