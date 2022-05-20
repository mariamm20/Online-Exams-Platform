<?php
session_start();
//echo $_SESSION['id'];

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
    <link rel="stylesheet" href="css/setting.css" />
</head>

<body>
    <div id="app">

        <?php include('../includes/header_prof_stud.inc.php'); ?>

        <section class="container section-two" data-aos="fade-up">
            <div class="left">
                <img class="profile-picture" src="img/prof.png"
                <?php 
                    if($_SESSION['role'] == "student")
                    { ?>
                    src="img/student.png"
                    <?php }
                ?> >
                <a href="#" data-bs-target="#change-modal" data-bs-toggle="modal"><i class="fa fa-camera" aria-hidden="true"></i></a>
                <div class="details">
                    <p>Mariam Mohamed Ibrahim</p>
                    <span>Student</span>
                </div>

            </div>
            <div class="right">
                <div class="header-bg">
                    <h4 id="role">Setting</h4>
                </div>

                <div class="form-section">
                    <form action="" method="Post">

                        <fieldset class="inputs">
                            <input type="text" placeholder="Change Your Name" />

                            <input type="text" placeholder="Change Acadimic ID" />

                            <input type="email" placeholder="Change Email" />


                            <input type="password" placeholder="Change Password" id="eye" />
                            <button onclick="event.preventDefault(),myFunction()" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Password" class="view-password"><i class="fa-solid fa-eye"></i></button>

                            <?php 
                            if($_SESSION['role'] == "student")
                            { ?>
                                <select>
                                <option selected disabled>Change Chosen Level</option>
                                <option>Level One</option>
                                <option>Level Two</option>
                                <option>Level Three</option>
                                <option>Level Four</option>
                            </select>
                            <select>
                                <option selected disabled>Change Chosen Department</option>
                                <option>Private</option>
                                <option>General</option>

                            </select>
                            
                            <?php }
                            ?>

                            

                            <div id="btn-div">
                                <button>Save Changes</button>
                            </div>
                </div>

                <div class="modal fade" id="change-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content change-list">

                            <form>
                                <div class="modal-body ">

                                    <div class="standard add-image">
                                        <p><i class="fa fa-camera" aria-hidden="true"></i></i> Choose your picture</p>
                                        <div class="in">
                                            <input type="file" name="uploadfile" id="img" style="display:none;" onchange="javascript:showoneimg()" />
                                            <label for="img">Browse</label>
                                        </div>


                                    </div>
                                    <div>
                                        <ul id="images">

                                        </ul>
                                    </div>

                                </div>
                                <div class="modal-footer">

                                    <button type="button">Submit</button>
                                    <button type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/setting.js"></script>
</body>

</html>