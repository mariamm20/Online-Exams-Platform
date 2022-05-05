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
  <link href="../assests/magic-master/dist/magic.min.css" rel="stylesheet"/>
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

    <?php
        include('includes/adminheader.inc.php');
      ?>


      <section class="container content">

        <div class="title">Registeration Requests</div>
        <div class="table-content">
          <table class="table  table-responsive ">
           
            <tbody>
              <tr class="table-head">
                <td scope="col">#</td>
                <td scope="col">Name</td>
                <td scope="col">Acadimic&nbsp;ID</td>
                <td scope="col">Email</td>
                <td scope="col">Accept</td>
                <td scope="col">Reject</td>
              </tr>
              
              <?php 
                  $adminview->showProfessorRequests();
              ?>
                
              
            </tbody>
          </table>
          
          <div class="modal magictime swashIn" id="remove-request" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Request</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/rejectRequest.inc.php" method="post">
                <div class="modal-body">
                  <p class="text-start fw-bolder">Are you sure to delete this request? </p>
                  
                  
                </div>
                <div class="modal-footer">
                <input type="hidden" id = "prof_id" name="id"/>
                  <button type="submit" class="" name="reject">Yes</button>
                  <button type="submit" name="cancel">Cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        
        </div>



      </section>
    </div>
  </div>
  </div>
  <!--Scripts part-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js/admin.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>
  <script>

    $(document).on('click', '.reject_prof', function(){
        $("#prof_id").val($(this).data('fid'));
    });

</script>
</body>

</html>