<header class="container" data-aos="fade-down" >
        <nav class="navbar navbar-expand-lg vertical">
            <span class="fs-4 title"><a class="navbar-brand" href="home.php">
                                   Online Exams <br />
                        <span class="platform-word">Platform </a>
</span>
                    
                </a></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <?php if(isset($_SESSION['id'])){
                 ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item register-color">
                        <a class="nav-link" href="../includes/logout.inc.php?<?= $_SESSION['role']; ?>">
                            Log Out
                        </a>
                    </li>
                   
                    <li class="nav-item" >
                        <a class="nav-link" href="fqa.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <?php }
            else
            {?>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item register-color">
                        <a class="nav-link" href="pre-register.php">
                            Register
                        </a>
                    </li>
                   
                    <li class="nav-item" >
                        <a class="nav-link" href="login.php">
                           Login
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="fqa.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            
            <?php   
            } ?>
        </nav>
    </header>