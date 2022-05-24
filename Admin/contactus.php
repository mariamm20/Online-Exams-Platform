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
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
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

      <?php
      include('includes/adminheader.inc.php');
      ?>


      <section class="container content">

        <div class="title">Contact Us</div>
        <div class="table-content">
          <table class="table table-responsive ">

            <tbody>
              <tr class="table-head">
                <td scope="col">#</td>
                <td scope="col">Username</td>
                <td scope="col">Email</td>
                <td scope="col">Status</td>
                <td scope="col">Preview</td>
              </tr>

              <?php $adminview->showContact(); ?>


            </tbody>
          </table>

          <!-- before preview contact -->
          <div class="modal magictime swashIn" id="preview_contact" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-eye" style="color: black;left: 0px;"></i> Preview Contact</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="includes/accept_rejectContact.inc.php" method="POST">
                  <div class="modal-body">
                    <p class="text-center fw-bolder">Contact Message</p>
                    <input type="text" name="msg" id="msg_to_show" class="msg_input" readonly>
                  </div>

                  <div class="modal-footer">
                    <input type="hidden" name="id" id="contact_selected_id">
                    <button type="submit" class="accept_contact" name="accept">Accept</button>
                    <button type="submit" class="reject_contact" name="reject">Reject</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

          <!-- after preview contact -->
          <div class="modal magictime swashIn" id="previewed_contact" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-eye" style="color: black;left: 0px;"></i> Preview Contact</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p class="text-center fw-bolder">Contact Message</p>
                  <input type="text" name="msg" id="msg_previewed_to_show" class="msg_input" readonly>
                </div>

                <div class="modal-footer">
                  <input type="hidden" name="id" id="contact_previewed_selected_id">
                  <button type="submit" class="" name="close" data-bs-dismiss="modal">OK</button>
                </div>

              </div>
            </div>
          </div>


      </section>
    </div>
  </div>
  </div>



  <!--Scripts part-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/admin.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>



  <!-- before message preview -->
  <script>
    $(document).on('click', '.preview-contact-btn', function() {
      $("#contact_selected_id").val($(this).data('fid'));
    });
  </script>

  <script>
    $(document).on('click', '.preview-contact-btn', function() {
      $("#msg_to_show").val($(this).data('rid'));
    });
  </script>


  <!-- after message preview -->
  <script>
    $(document).on('click', '.previewed-contact-btn', function() {
      $("#contact_previewed_selected_id").val($(this).data('fid'));
    });
  </script>

  <script>
    $(document).on('click', '.previewed-contact-btn', function() {
      $("#msg_previewed_to_show").val($(this).data('rid'));
    });
  </script>



</body>

</html>