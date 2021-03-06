<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();
if (isset($_GET['id'])) {
    echo $sub_id = $_GET['id'];
}
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
    <link rel="stylesheet" href="css/subjects.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header.inc.php'); ?>
        <section class="container subjects-chapters-section" data-aos="fade-up">

            <div class="left">

                <div class="heading-notify sub">
                    <p> <i class="fa fa-book" aria-hidden="true"></i> Your Subjects</p>
                </div>
                <div>
                    <ol class="list-group list-group-numbered">
                        <?php $professor->showSubjects(); ?>
                    </ol>
                </div>
            </div>


            <div class="right">
                <div class="img-right">
                    <p>No Chapters To Show Yet!</p>
                    <img src="img/10.png" />
                </div>
                <div class="heading-notify chapters d-none">
                    <p><i class="fa fa-bookmark" aria-hidden="true"></i>
                        <span> </span> Chapters
                    </p>
                    <button data-bs-toggle="modal" class="add_chapter" data-bs-target="#add-chapter">Add Chapter</button>
                </div>
                <div class="names-chapters d-none" id="chapters">
                    <ol class="list-group list-group-numbered">
                        <?php include('../includes/subject.inc.php'); ?>
                    </ol>
                </div>


            </div>


            <!-- add chapter -->
            <div class="modal magictime vanishIn" id="add-chapter" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa fa-bookmark" aria-hidden="true"></i> Add Chapter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../includes/chapters.inc.php" method="post">
                            <div class="modal-body">
                                <input type="hidden" id="id_of_subject" name="sub_id">
                                <input type="text" placeholder="Chapter Name" name="chapter_name">
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="" name="save">Save changes</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- edit chapter ------->
            <div class="modal magictime vanishIn" id="edit-chapter" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-solid fa-edit"></i> Edit Chapter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../includes/chapters.inc.php" method="post">
                            <div class="modal-body">
                                <input type="text" name="chapter_name" id="chapter_name_to_show" placeholder="Change Chapter Name">
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="chapter_id" id="id_of_edited_chapter" placeholder="Chapter ID">
                                <button type="submit" class="" name="edit">Save changes</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- remove chapter  -->
            <div class="modal magictime swashIn" id="remove-chapter" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Chapter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../includes/chapters.inc.php" method="post">
                            <div class="modal-body">
                                <p class="text-start fw-bolder">Are you sure to delete this chapter? </p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="chapter_to_delete" name="chapter_id">
                                <button type="submit" name="delete">Yes</button>
                                <button type="submit" data-bs-dismiss="modal">Cancel</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>


        </section>





    </div>
    <!--Scripts part-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/subjects.js"></script>

    <script>
        $('.list-group-item').click(function() {
            var subject_id = $(this).val();

            $.ajax({
                url: '../includes/subject.inc.php',
                method: 'POST',
                data: {
                    subject_id: subject_id
                },
                success: function(data) {
                    $('#chapters').html(data);
                    console.log(subject_id)
                }
            });
        });
    </script>

    <script>
        $(document).on('click', '.list-group-item', function() {
            $("#id_of_subject").val($(this).data('sid'));
        });

        $(document).on('click', '.remove_chapter', function() {
            $("#chapter_to_delete").val($(this).data('sid'));
        });

        $(document).on('click', '.edit_chapter', function() {
            $("#id_of_edited_chapter").val($(this).data('cid'));
            $("#chapter_name_to_show").val($(this).data('nid'));
        });
    </script>

</body>

</html>