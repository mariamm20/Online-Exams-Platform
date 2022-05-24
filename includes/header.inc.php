<?php




?>

<header class="container" data-aos="fade-down">
    <nav class="navbar navbar-expand-lg vertical">
        
        <?php if(isset($_SESSION['id']))
        {?>
        <span class="fs-4 title"><a class="navbar-brand" 
        <?php if($_SESSION['role'] == "student"){ ?>
            href="student.php" >
            <?php }
            else{?>
                href="professor.php" >
            <?php
            }
             ?>
                Online Exams </br>
                <span class="platform-word">Platform </a>
        </span>

<?php
        }
        else{?>
        <span class="fs-4 title"><a class="navbar-brand" 
            href="home.php" >
                Online Exams <br />
                <span class="platform-word">Platform </a>
        </span>
<?php } ?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <?php if (isset($_SESSION['id'])) {
        ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav">
                    <!-- <li class="nav-item register-color">
                        <a class="nav-link" href="../includes/logout.inc.php?<?= $_SESSION['role']; ?>">
                            Log Out
                        </a>
                    </li> -->
                    <?php if($_SESSION['role'] == "professor" ){ ?>
                    <li class="nav-item">
                    <a class="nav-link" href="first-creation-form.php"  style="color:rgb(48, 168, 228)">
                        Create Exam
                    </a>
                    </li>
                    <?php } ?>

                    <?php if($_SESSION['role'] == "student" ){ ?>
                    <li class="nav-item">
                    <a class="nav-link" href="student.php"  style="color:rgb(48, 168, 228)">
                        Available Exams
                    </a>
                    </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link" href="fqa.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contact Us
                        </a>
                    </li>


                    <li class="nav-item">
                        <?php 
                        if($_SESSION['role'] == "professor"){
                        ?>
                        <a class="nav-link" href="../Home/professor.php">
                        <?php if(isset($_SESSION['image']))
                            { 
                               $professor->uploadImageView();  
                        
                        }
                        else { ?>
                           <img class="profile-img" alt="professor"
                            src="../profile-images/professors/prof.png" >
                            <?php } ?>
                        </a>
                            
                       
                        <?php }
                        if($_SESSION['role'] == "student"){ ?>
                        <a class="nav-link" href="../Home/student.php">
                        <?php if(isset($_SESSION['image']))
                            { 
                               $student->uploadImageView();  
                        
                        }
                        else { ?>
                           <img class="profile-img" alt="professor"
                            src="../profile-images/professors/student.png" >
                            <?php } ?>
                        </a>
                        <?php } ?>
                    </li>
                
                </ul>
            </div>
        <?php } else { ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item register-color">
                        <a class="nav-link" href="pre-register.php">
                            Register
                        </a>
                    </li>
                    <!--                    
                    <li class="nav-item" >
                        <a class="nav-link" href="login.php">
                           Login
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="fqa.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

        <?php
        } ?>
    </nav>
</header>