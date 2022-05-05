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
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
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
            <a class="nav-link" aria-current="page" href="../Admin/requests.php">
              <i class="fa fa-info-circle" aria-hidden="true"></i> Requests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Admin/professors.php">
              <i class="fa-solid fa-users"></i> Professors
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="../Admin/levels.php">
              <i class="fa-solid fa-border-all"></i> Levels
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="../Admin/contactus.php">
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

        <div class="title">Contact Us</div>
        <div class="table-content">
          <table class="table table-responsive ">

            <tbody>
              <tr class="table-head">
                <td scope="col">#</td>
                <td scope="col">Username</td>
                <td scope="col">Email</td>
                <td scope="col">Message</td>
                <td scope="col">Status</td>
                <td scope="col">Preview</td>
                <td scope="col">Delete</td>
              </tr>

              <?php
              $adminview->showContact();
              ?>
            </tbody>
          </table>

          <!-- preview msg -->
          <div class="modal magictime swashIn" id="preview-msg" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-eye"></i> Preview</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-start fw-bolder">Message </p>
                  <p> Preview page </p>
                </div>
                <div class="modal-footer">
                  <button type="button" data-bs-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>


          <!-- delete contact -->
          <div class="modal magictime swashIn" id="remove-msg" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Contact</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="includes/deleteContact.inc.php" method="POST" >
                  <div class="modal-body">
                    <p class="text-start fw-bolder">Are you sure to delete contact? </p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="contact_id" id="contact_id_to_delete" >
                    <button type="submit" class="" name="delete">Yes</button>
                    <button type="button" name="cancel" data-bs-dismiss="modal">Cancel</button>
                  </div>
              </div>

              <?php //x$adminview->deleteContact($id) ?>

              </form>

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
    $(document).on('click', '.delete-contact-btn', function() {
      $("#contact_id_to_delete").val($(this).data('fid'));
    });
  </script>
</body>

</html>