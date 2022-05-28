<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();

include('../Controllers/examCont.class.php');
include('../Views/examView.class.php');
$exam = new examView();
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
  <link rel="stylesheet" href="css/all-exams.css" />
</head>

<body>
  <div id="app">
    <?php include('../includes/header.inc.php'); ?>
    <section class="container" data-aos="fade-up">
      <div class="middle">
        <p>
          Created Exams
        </p>
      </div>
      <div class="table-content">

        <table class="table  table-responsive ">

          <tbody>
            <tr class="table-head">
              <td scope="col">#</td>
              <td scope="col">Exam Name</td>
              <td scope="col">Subject Name </td>
              <td scope="col">Date</td>
              <td scope="col">Start Time</td>
              <td scope="col">Duration</td>
              <td scope="col">Status</td>
              <td scope="col">Edit</td>
            </tr>

            <?php $professor->showAllExams($_SESSION['id']); ?>

          </tbody>
        </table>

      </div>


      <!-- edit exam -->
      <div class="modal magictime vanishIn" id="edit-exam" tabindex="-1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><i class="fa-solid fa-pen-to-square"></i> Edit Exam </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../includes/editExams.inc.php" method="post">
              <div class="modal-body">
                <input type="hidden" name="exam_id" id="exam_id_to_show" placeholder="Exam ID">
                <input type="text" name="exam_name" id="exam_name_to_show" placeholder="Exam Name">
                <input type="text" name="exam_date" id="exam_date_to_show" placeholder="Exam Date" onfocus="(this.type='date')" onblur="(this.type='text') ;" id="date">
                <input type="number" name="exam_duration" id="exam_duration_to_show" placeholder="Duration" />
                <input type="text" name="start_time" id="start_time_to_show" placeholder="Exam Start Time" onfocus="(this.type='time')" onblur="(this.type='text')" id="eye" />
              </div>
              <div class="modal-footer">
                <button type="submit" name="edit" class="">Save changes</button>
              </div>
            </form>

          </div>
        </div>
      </div>

    </section>





  </div>
  <!--Scripts part-->
  <script src="../assests/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../assests/node_modules/aos/dist/aos.js"></script>
  <script src="../assests/global.js"></script>
  <script src="../assests/bootstrap.bundle.min.js"></script>

  <script>
    $(document).on('click', '.edit_exam', function() {
      $("#exam_id_to_show").val($(this).data('id'));
      $("#exam_name_to_show").val($(this).data('eid'));
      $("#exam_date_to_show").val($(this).data('did'));
      $("#exam_duration_to_show").val($(this).data('uid'));
      $("#start_time_to_show").val($(this).data('sid'));
    });
  </script>


</body>

</html>