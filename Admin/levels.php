<?php
include('../Controllers/dbconnection.class.php');
include('../Controllers/AdminCont.class.php');
include('../Views/AdminView.class.php');
$adminview = new AdminView();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Exams Platform </title>
  <link href="../assests/magic-master/dist/magic.min.css" rel="stylesheet" />
  <link rel="icon" href="../assests/cartoon.ico" />
  <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
  <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
  <link href="../assests/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assests/global.css" />
  <link rel="stylesheet" href="css/admin.css" />


</head>

<body>
  <div id="app">
    <div class="d-flex main" data-aos="zoom-in">

      <div class=" divs-container">
        <a class="d-flex col align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <div class="d-flex justify-content-around">
          <a class="navbar-brand" href="../Home/home.php">
            Online Exams <br />
            <span class="platform-word">Platform </span>

          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>


        <ul class="navbar-nav nav-pills flex-column mb-auto elements" id="navbarSupportedContent">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Admin/dashboard.php">
              <font-awesome-icon icon="fa-solid fa-gauge" /><i class="fa-solid fa-palette"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="requests.php">
              <i class="fa fa-info-circle" aria-hidden="true"></i> Requests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="professors.php">
              <i class="fa-solid fa-users"></i> Professors
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="levels.php">
              <i class="fa-solid fa-border-all"></i> Levels
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="contactus.php">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              Contact Us

            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="../Home/home.php">
              <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign
              out
            </a>
          </li>
        </ul>
      </div>


      <section class="container content">

        <div class="title border-gradient-rounded">Levels And Departments</div>
        <div class="table-content">
          <table class="table table-responsive levels ">
            <tbody>
              <tr class="first-rows">
                <td colspan="4"><button type="button" data-bs-toggle="modal" data-bs-target="#add-level">Add Level</button></td>
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
                <form action="includes/addlevel.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="level_name" id="level" placeholder="Level Name">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="" name="save">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <!-- add departments modal ------------------------------- -->
          <div class="modal magictime vanishIn" id="add-dept" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-puzzle-piece"></i> Add Department</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/addDept.inc.php" method="post">
                  <div class="modal-body">
                    <!-- <input type="text" name="level_id" id="added-dept" placeholder="Level ID/Name"> -->
                    <select name="level_id">Choose Level
                      <?php $adminview->showAllLevels(); ?>
                    </select>
                    <input type="text" name="dept_name" id="dept" placeholder="Department Name">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="" name="save">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <!-- add subjects modal ------------------------------- -->
          <div class="modal magictime vanishIn" id="add-subject" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-file"></i> Add Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/add_dept_sub.inc.php" method="post">
                  <div class="modal-body">
                    <input type="text" name="subject_id" id="added-subject" placeholder="Subject Name">
                    <input type="text" name="dept_id" id="added-subject" placeholder="Department ID/Name">

                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="" name="save">Save changes</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <!-- remove department modal ------------------------------- -->
          <div class="modal magictime swashIn" id="remove-dept" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Department</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-start fw-bolder">Are you sure to delete this Department? </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="">Yes</button>
                  <button type="button">Cancel</button>
                </div>
              </div>
            </div>
          </div>


          <!-- remove subjects modal ------------------------------- -->
          <div class="modal magictime swashIn" id="remove-subj" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-start fw-bolder">Are you sure to delete this subject? </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="">Yes</button>
                  <button type="button">Cancel</button>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>
    </div>
  </div>
  </div>
  <!--Scripts part-->
  <script src="js/admin.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>

  <script>
    $(document).on('click', '.addDept', function() {
      $("#added-dept").val($(this).data('fid'));
    });
  </script>

  <script>
    $(document).on('click', '.add_dept_sub', function() {
      $("#added-subject").val($(this).data('fid'));
    });
  </script>

</body>

</html>