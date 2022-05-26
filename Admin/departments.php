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
        <div class="title border-gradient-rounded">Departments</div>
        <div class="table-content">

          <table class="table table-responsive levels ">
            <tbody>
              <tr class="first-rows">
                <td colspan="5">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#add-dept" class="add_department">Add Dept</button>
                </td>
              </tr>
              <?php $adminview->showDepts(); ?>
            </tbody>
          </table>

          <!-- add department ------------>
          <div class="modal magictime vanishIn" id="add-dept" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-puzzle-piece"></i> Add Department</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/departments.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="dept_name" id="dept" placeholder="Department Name">
                    <select name="level_id">
                      <option selected disabled>choose Level</option>
                      <?php $adminview->showAllLevels(); ?>
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="" name="save">Save changes</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

          <!-- edit department ------------------------------- -->
          <div class="modal magictime vanishIn" id="edit-dept" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-edit"></i> Edit Department</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/departments.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="dept_name" id="dept_name_to_show" placeholder="Change Department Name">
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="dept_id" id="id_of_edited_dept" placeholder="Department ID">
                    <button type="submit" class="" name="edit">Save changes</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

          <!-- delete department -->
          <div class="modal magictime swashIn" id="delete-dept" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Delete Department</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/departments.inc.php" method="post">
                  <div class="modal-body">
                    <p class="text-start fw-bolder">Are you sure to delete this department? </p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="dept_id" id="id_of_deleted_dept" placeholder="Department ID">
                    <button type="submit" class="" name="delete">Yes</button>
                    <button type="button" data-bs-dismiss="model">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </section>

    </div>
  </div>
  <!--Scripts part-->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="js/admin.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>

  <script>
    $(document).on('click', '.edit_dept', function() {
      $("#id_of_edited_dept").val($(this).data('did'));
    });
  </script>

  <script>
    $(document).on('click', '.edit_dept', function() {
      $("#dept_name_to_show").val($(this).data('nid'));
    });
  </script>

  <script>
    $(document).on('click', '.delete_dept', function() {
      $("#id_of_deleted_dept").val($(this).data('did'));
    });
  </script>

</body>

</html>