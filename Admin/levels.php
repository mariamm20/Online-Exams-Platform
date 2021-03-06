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

        <div class="title border-gradient-rounded">Levels</div>
        <div class="table-content">
          <table class="table table-responsive levels ">
            <tbody>
              <tr class="first-rows">
                <td colspan="4"><button type="button" data-bs-toggle="modal" data-bs-target="#add-level">Add Level</button></td>
              </tr>
              <tr class="table-head">
                <td scope="col">#</td>
                <td scope="col" style="width: 75%;">Level&nbsp;Name</td>
                <td scope="col">Edit</td>
                <td scope="col">Delete</td>
              </tr>
              <?php $adminview->showLevels(); ?>
            </tbody>
          </table>

          <!-- add level modal ------------------------------- -->
          <div class="modal magictime vanishIn" id="add-level" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-layer-group"></i> Add Level</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/levels.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="level_name" id="level" placeholder="Level Name">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="" name="save">Save changes</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

          <!-- edit level ------------------------------- -->
          <div class="modal magictime vanishIn" id="edit-level" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-edit"></i> Edit Level</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/levels.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="level_name" id="level_name_to_show" placeholder="Change Level Name">
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="level_id" id="id_of_edited_level" placeholder="Level ID">
                    <button type="submit" class="" name="edit">Save changes</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

          <!-- delete level modal ------------------------------- -->
          <div class="modal magictime swashIn" id="delete-level" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Level</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/levels.inc.php" method="post">
                  <div class="modal-body">
                    <p class="text-start fw-bolder">Are you sure to delete this level? </p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="level_id" id="id_of_deleted_level" placeholder="Level ID">
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
    $(document).on('click', '.delete_level', function() {
      $("#id_of_deleted_level").val($(this).data('lid'));
    });
  </script>

  <script>
    $(document).on('click', '.edit_level', function() {
      $("#id_of_edited_level").val($(this).data('lid'));
    });
  </script>

  <script>
    $(document).on('click', '.edit_level', function() {
      $("#level_name_to_show").val($(this).data('nid'));
    });
  </script>
  
</body>
</html>