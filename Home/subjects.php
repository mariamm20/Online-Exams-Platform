<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();
if(isset($_GET['id']))
{
   echo $sub_id =$_GET['id'];
}
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
    <link rel="stylesheet" href="css/subjects.css" />
</head>

<body>
    <div id="app">
        <header class="container" data-aos="fade-down">
            <nav class="navbar navbar-expand-lg vertical">
                <span class="fs-4 title"><a class="navbar-brand" href="../Professor/professor.html">
                        Online Exams <br />
                        <span class="platform-word">Platform </a>
                </span>

                </a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="nav">
                        <li class="nav-item register-color">
                            <a class="nav-link" href="first-creation-form.php">
                                Create Exam
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../FAQ/fqa.html">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Contact/contact.html">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Professor/professor.html">
                                <img src="img/prof.png" class="profile-img">
                                <span class="profile-text">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="container subjects-chapters-section" data-aos="fade-up">
            <div class="left">
                
                    <div class="heading-notify">
                        <p> <i class="fa fa-book" aria-hidden="true"></i> Your Subjects</p>
                    </div>
                    <div>
                        <ol class="list-group list-group-numbered">
                         
                         <?php
                            $professor->showSubjects();
                         ?>
                         
                        </ol>
                    </div>
                
            </div>


            <div class="right">
                <div class="img-right">
                    <p>No Chapters To Show Yet!</p>
                    <img src="img/10.png"/>
                </div>
                        <div class="heading-notify chapters d-none" >
                        <p><i class="fa fa-bookmark" aria-hidden="true"></i> <span>
                             <?php  ?>
                            </span> Chapters</p>
                        <button data-bs-toggle="modal" class="add_chapter" 
                        data-bs-target="#add-chapter">Add Chapter</button>
               </div>
               <div class="names-chapters d-none" id = "chapters">
                        <ol  class="list-group list-group-numbered">
                    <?php
                    
                       include('../includes/subject.inc.php');
                        
                        
                    ?>
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
                <form action="../includes/add_chpter.inc.php" method="post">
                    <div class="modal-body">
                    <input type="hidden" id="id_of_subject"  name="sub_id">
                      <input type="text" placeholder="Chapter Name" name="name">
                    </div>
                    <div class="modal-footer">
                      
                      <button type="submit" class="" name="save">Save changes</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>

              

        </section>





    </div>
    <!--Scripts part-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/subjects.js"></script>

    <script>
        
        $('.list-group-item').click(function(){
        var subject_id = $(this).val();
        
        $.ajax({
            url: '../includes/subject.inc.php',
        method: 'POST',
        data: {subject_id:subject_id},
        success: function(data){
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
    </script>
    

</body>

</html>