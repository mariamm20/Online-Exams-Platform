<?php
include('../Controllers/dbconnection.class.php');
include('../Controllers/AdminCont.class.php');
include('../Views/AdminView.class.php');
$adminview = new AdminView();
session_start();

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
  <link rel="stylesheet" href="css/admin.css" />


</head>

<body>
  <div id="app">
    <div class="d-flex main" data-aos="zoom-in">

      <?php include('includes/adminheader.inc.php'); ?>


      <section class="container content">

        <div class="title border-gradient-rounded">Subjects</div>
        <div class="table-content">
          <table class="table table-responsive levels ">
            <tbody>
              <tr class="first-rows">
                <td colspan="7">
                  <button type="button" data-bs-toggle="modal" class="add_subject" data-bs-target="#add-subject" id="level_name_to_show">Add Subject</button>
                </td>
              </tr>
              <?php $adminview->showSubjects(); ?>
            </tbody>
          </table>


          <!-- add subject  ----->
          <div class="modal magictime vanishIn" id="add-subject" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-book"></i> Add Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/subjects.inc.php" method="post">
                  <div class="modal-body">
                    <!-- <input type="text" name="dept_id" placeholder="Dept ID">
                    <input type="text" name="level_id" placeholder="Level Id"> -->
                    <input type="text" name="subject_name" placeholder="Subject Name">


                    <select name="level_id" class="level_name" id="choose_level">
                      <option selected disabled>Choose Level</option>
                      <?php $adminview->showAllLevels(); ?>
                    </select>

                    <select name="dept_id" id="choose_dept">
                      <option selected disabled>Choose Department</option>
                      <?php include('../Admin/includes/getDeptLevel.inc.php'); ?>
                    </select>


                  </div>
                  <div class="modal-footer">

                    <button type="submit" name="save">Save changes</button>
                  </div>
              </div>


              </form>
            </div>

          </div>

          <!-- edit subject ------------------------------- -->
          <div class="modal magictime vanishIn" id="edit-subject" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-edit"></i> Edit Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/subjects.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="subject_name" id="subject_name_to_show" placeholder="Change Department Name">
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="subject_id" id="id_of_edited_subject" placeholder="Department ID">
                    <button type="submit" class="" name="edit">Save changes</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

          <!-- delete subject -->
          <div class="modal magictime swashIn" id="delete-subject" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Delete Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/subjects.inc.php" method="post">
                  <div class="modal-body">
                    <p class="text-start fw-bolder">Are you sure to delete this subject? </p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="subject_id" id="id_of_deleted_subject" placeholder="Subject ID">
                    <button type="submit" class="" name="delete">Yes</button>
                    <button type="button" data-bs-dismiss="model">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

      </section>

    </div>
  </div>

  <!--Scripts part-->


  <script src="js/admin.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>

  <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>

  <script>
    $("#choose_level").on("change", function() {
      var levelId = $(this).val();

      $.ajax({
        url: "../Admin/includes/getDeptLevel.inc.php",
        type: "POST",
        cache: false,
        data: {
          levelId: levelId
        },
        success: function(data) {
          $("#choose_dept").html(data);
          console.log(data);
        }
      });
    })
  </script>


  <script>
    $(document).on('click', '.add_subject', function() {
      $("#level_name_to_show").val($(this).data('kid'));
    });
  
    $(document).on('click', '.edit_subject', function() {
      $("#id_of_edited_subject").val($(this).data('sid'));
      $("#subject_name_to_show").val($(this).data('nid'));
    });
  
    $(document).on('click', '.delete_subject', function() {
      $("#id_of_deleted_subject").val($(this).data('sid'));
    });
  </script>





</body>

</html>