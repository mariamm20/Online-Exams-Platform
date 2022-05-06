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

                <div class="title border-gradient-rounded">Levels And Departments</div>
                <div class="table-content">
                    <table class="table table-responsive levels "  >
                        <tbody>
                        <tr class="first-rows">
                              <td colspan="4"><button type="button" data-bs-toggle="modal"
                               data-bs-target="#add-level" >Add Level</button></td>
                         </tr>
                          <?php
                            $adminview->showLevels();
                          ?>
                            <!-- <tr class="first-rows">
                                <td colspan="4"><button type="button" data-bs-toggle="modal"
                                    data-bs-target="#add-level" >Add Level</button></td>
                            </tr>
                            <tr class="lvl">
                                <td colspan="2" class="lvl-name">Level One </td>
                                <td colspan="2" class="second-row" ><button type="button" data-bs-toggle="modal"
                                data-bs-target="#add-dept">Add Dept</button></td>
                            </tr>
                            <tr class="lvl-head">
                                <td>Dept&nbsp;Name</td>
                                <td>Subjects</td>
                                <td>Add&nbsp;Subjects</td>
                                <td>Delete</td>
                            </tr>
                            <tr >
                                <td style="width: 220px;">General </td>
                                <td style="width:478.56px">
                                    <div class="d-flex justify-content-between subject">
                                        <p>Software constraction </p>
                                        <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
                                    </div>
                                    <div class="d-flex justify-content-between subject">
                                        <p>Software constraction </p>
                                        <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
                                    </div>
                                    <div class="d-flex justify-content-between subject">
                                        <p>Software constraction </p>
                                        <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
                                    </div>

                                </td>
                                <td class="edit">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#add-subject"><i class="fa-solid fa-square-plus"></i></a>
                                </td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                  data-bs-target="#remove-dept"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr> -->
                            

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
                              <input type="text" name= "level_name" id = "level" placeholder="Level Name">
                              
                              
                            </div>
                            <div class="modal-footer">
                              
                              <button type="submit" class="" name = "save">Save changes</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
<!--                        add department      -->
                      <div class="modal magictime vanishIn" id="add-dept" tabindex="-1" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"><i class="fa-solid fa-puzzle-piece"></i> Add Department</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="includes/addDepartment.inc.php" method="post">
                              <div class="modal-body">
                              <input type="hidden" name="level_id" id="level_id" >
                                <input type="text" name="dept_name" placeholder="Department Name">
                                
                                
                              </div>
                              <div class="modal-footer">
                              
                                <button type="submit" name="save">Save changes</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
<!--                   add subject for department     -->
                      <div class="modal magictime vanishIn" id="add-subject" tabindex="-1" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"><i class="fa-solid fa-file"></i> Add Subject</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="includes/addDeptSubject.inc.php" method="post">
                            <div class="modal-body">
                              <input type="hidden" id="id_of_level" name="level_id">
                              <input type="hidden" id="dept_id" name="dept_id">
                              <input type="text" placeholder="Subject Name" name="subject_name">
                              
                              
                            </div>
                            <div class="modal-footer">
                              
                              <button type="submit"  name="save">Save changes</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
<!--                     remove department   -->
                      <div class="modal magictime swashIn" id="remove-dept" tabindex="-1" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Department</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="includes/deleteDepartment.inc.php" method="post">
                            <div class="modal-body">
                              <p class="text-start fw-bolder">Are you sure to delete this Department? </p>
                              
                              
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" id="dept_to_delete" name="id">
                              <button type="submit" name="delete">Yes</button>
                              <button type="submit" name="cancel">Cancel</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
<!--                    remove subject    -->
                      <div class="modal magictime swashIn" id="remove-subj" tabindex="-1" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove Subject</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="includes/deleteSubject.inc.php" method="post">
                            <div class="modal-body">
                              <p class="text-start fw-bolder">Are you sure to delete this subject? </p>
                              
                              
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" id="sub_to_delete" name="id">
                              <button type="submit" name="delete">Yes</button>
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
      $(document).on('click', '.add_department', function(){
        $("#level_id").val($(this).data('lid'));
    });
    </script>
    <script>
      $(document).on('click', '.add_subject', function(){
        $("#id_of_level").val($(this).data('lid'));
    });
    </script>
    <script>
      $(document).on('click', '.add_subject', function(){
        $("#dept_id").val($(this).data('did'));
    });

    </script>
        <script>
      $(document).on('click', '.remove_subject', function(){
        $("#sub_to_delete").val($(this).data('sid'));
    });
    
    </script>
            <script>
      $(document).on('click', '.remove_dept', function(){
        $("#dept_to_delete").val($(this).data('fid'));
    });
    
    </script>
</body>

</html>