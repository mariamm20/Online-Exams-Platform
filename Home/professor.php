<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link rel="icon" href="../assests/cartoon.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/professor.css" />
</head>

<body>
    <div id="app">
        <header class="container" data-aos="fade-down">
            <nav class="navbar navbar-expand-lg vertical">
                <span class="fs-4 title"><a class="navbar-brand" href="professor.html">
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
                            <a class="nav-link" href="#">
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

        <section class="container" data-aos="fade-up">
            <div class="top">
                <div class="top-left">
                    <div class="buttons">
                        <button onclick="location.href='../Subjects/subjects.html'"><i class="fa-solid fa-book"></i> Questions Bank</button>
                        <button><i class="fa-solid fa-history"></i> Results History</button>
                    </div>
                </div>
                <div class="top-right">
                    <div class="details">
                        <div class="data">
                        <p class="name">
                            Ali Mohamed Ibrahim
                            <a href="#"><i class="fa fa-cog " aria-hidden="true"></i></a>
                        </p>
                        <p class="email">
                            ali_ibrahim@gmail.com
                        </p>
                        <p class="role">
                            Professor
                        </p>
                        </div>
                        <img src="img/prof.png" class="prof-img" />
                        <div class="change-pic">
                            <p>
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img" style="display:none;"/>
                                <label for="img">Change profile picture</label>
                        </p>
                        </div>

                        

                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="bottom-left">
                    <div class="heading-notify notify">
                        <p> <i class="fa-solid fa-bell"></i> Notifications  <span>(1)</span> </p>
                    </div>
                    <div class="notify-body">
                        <p>
                            <i class="fa-solid fa-info"></i>
                            Physics Exam is accepted by the admin. You can follow the results in Results history, Thanks for your efforts.
                        </p>
                        <p>
                            <i class="fa-solid fa-info"></i>
                            Physics Exam is accepted by the admin. You can follow the results in Results history, Thanks for your efforts.
                        </p>
                        <p>
                            <i class="fa-solid fa-info"></i>
                            Physics Exam is accepted by the admin. You can follow the results in Results history, Thanks for your efforts.
                        </p>
                        <p>
                            <i class="fa-solid fa-info"></i>
                            Physics Exam is accepted by the admin. You can follow the results in Results history, Thanks for your efforts.
                        </p>
                        <p>
                            <i class="fa-solid fa-info"></i>
                            Physics Exam is accepted by the admin. You can follow the results in Results history, Thanks for your efforts.
                        </p>
                        
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="heading-notify">
                        <p>Important Numbers</p>
                    </div>
                    <div class="numbers-body">
                        <p>Created Exams <span>20</span></p>
                        <p>Success Rate <span>80%</span></p>
                        <p>Failure Rate <span>20%</span></p>
                    </div>

                </div>
            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>