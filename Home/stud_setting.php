<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/StudentCont.class.php');
include('../Views/StudentView.class.php');
$student = new studentView();

//echo $_SESSION['id'];

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
    <link rel="stylesheet" href="css/setting.css" />
</head>

<body>
    <div id="app">

    <?php include('../includes/header_stud.inc.php'); ?>

        <section class="container section-two" data-aos="fade-up">

            <!-- user details -->
            <div class="left">

                <?php $student->uploadImageView(); ?>

                <a href="#" data-bs-target="#image-modal" data-bs-toggle="modal" class="image-upload" data-mid="<?= $_SESSION['id'] ?>"><i class="fa fa-camera" aria-hidden="true"></i></a>
                <div class="details">
                    <p><?= $_SESSION['user_name'] ?></p>
                    <span><?= $_SESSION['role'] ?></span>
                </div>
            </div>


            <!-- user update details -->
            <div class="right">
                <div class="header-bg">
                    <h4 id="role">Setting</h4>
                </div>

                <div class="form-section">
                    <form action="../includes/stud_setting.inc.php" method="POST">
                        <?php $student->showStudDetails(); ?>
                    </form>
                </div>
            </div>


            <div class="modal fade" id="image-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content change-list">

                        <!-- image upload form -->
                        <form action="../includes/stud_setting.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body ">
                                <div class="standard add-image">
                                    <p>
                                        <i class="fa fa-camera" aria-hidden="true"></i>
                                        </i> Choose your picture
                                    </p>
                                    <div class="in">
                                        <input type="file" name="image" id="img" style="display:none;" onchange="javascript:showoneimg()" />
                                        <label for="img">Browse</label>
                                    </div>
                                </div>
                                <div>
                                    <ul id="images"> </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="stud_id" id="id_of_stud" />
                                <button type="submit" name="upload" id='upload'>Upload</button>
                                <button type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </section>
        <div class="setting-img">
            <img src="img/13.jpg" alt="setting"/>
        </div>
        
        
    </div>




    <!--Scripts part-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/setting.js"></script>

    <script>
        $("#nameoflevel").on("change", function() {
            var levelId = $(this).val();
            console.log(levelId)
            $.ajax({
                url: "../includes/getDepartmenr.inc.php",
                type: "POST",
                cache: false,
                data: {
                    levelId: levelId
                },
                success: function(data) {
                    $("#department").html(data);
                }
            });
        })
    </script>

    <script>
        $(document).on('click', '.image-upload', function() {
            $("#id_of_stud").val($(this).data('mid'));
        });
    </script>


</body>

</html>