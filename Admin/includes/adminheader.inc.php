<?php
if(!isset($_SESSION['id'])){
  header("location:../Home/prof-login.php?loginfirst");
}else{
   if($_SESSION['role'] !="admin"){
      header("location: ../Home/home.php?admisonlyareallowed");

   }
  }
?>
<div class=" divs-container">
        <a class="d-flex col align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
          </a>
            <div class="d-flex justify-content-around">
              <a class="navbar-brand" href="dashboard.php">
                Online Exams <br />
                <span class="platform-word">Platform </span>

              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
          
        
        <ul class="navbar-nav nav-pills flex-column mb-auto elements" id="navbarSupportedContent">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">
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
            <a class="nav-link" aria-current="page" href="departments.php">
              <i class="fa-solid fa-puzzle-piece"></i> Departments
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="subjects.php">
              <i class="fa-solid fa-book"></i> Subjects
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="contactus.php">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              Contact Us

            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="../includes/logout.inc.php?">
              <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign
              out
            </a>
          </li>
        </ul>
      </div>