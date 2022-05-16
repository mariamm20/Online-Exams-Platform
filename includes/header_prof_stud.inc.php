<header class="container" data-aos="fade-down">
    <nav class="navbar navbar-expand-lg vertical">
        <span class="fs-4 title"><a class="navbar-brand" href="home.php">
                Online Exams <br />
                <span class="platform-word">Platform </a>
        </span>

        </a></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav">
                <li class="nav-item register-color">
                <?php 
                if ($_SESSION['role'] == "professor") { 
                    ?> 
                    <a class="nav-link" href="../Home/first-creation-form.php">
                        Create Exam
                    </a>
                    <?php } 
                ?>
                
                <?php 
                if ($_SESSION['role'] == "student") { 
                    ?> 
                    <a class="nav-link" href="../Home/avialable-exams.php"> 
                        Avialable Exams 
                    </a>
                    <?php } 
                ?>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Home/fqa.php">
                        FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Home/contact.php">
                        Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img class="profile-img"  
                            <?php 
                            if ($_SESSION['role'] == "professor") {
                            ?> src="img/prof.png" <?php 
                            } ?>
                            
                            <?php 
                            if ($_SESSION['role'] == "student") {
                            ?> src="img/student.png" <?php 
                            } ?>>
                        <!-- <span class="profile-text">Profile</span> -->
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>