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
    <link rel="stylesheet" href="css/question-bank.css" />
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
        <section class="container question-bank-section" data-aos="fade-up">
            <div class="main">
                <div class="heading-notify chapters">
                    <p><i class="fa fa-question-circle" aria-hidden="true"></i> <span> Motion</span>
                        Questions&nbsp;<span>(1)</span></p>
                    <button data-bs-toggle="modal" data-bs-target="#add-chapter">Add Questions</button>
                </div>
                <div class="question">
                    <p class="question-body">
                        1- In a uniform cicular motion:
                        <i class="fa fa-edit" data-bs-toggle="modal" data-bs-target="#add-question"></i>
                    </p>
                    <ol type="a">
                        <li>Velocity is constant</li>
                        <li>Distance is constant</li>
                        <li>Displacement is constant</li>
                        <li>Speed is constant <i class="fa fa-check-square correct" aria-hidden="true"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Correct Answer"></i></li>
                    </ol>

                    <p class="question-difficutly">Difficulty: <span class="easy">Easy</span></p>
                </div>
                <div class="question">
                    <p class="question-body">
                        1- In a uniform cicular motion:
                        <i class="fa fa-edit" data-bs-toggle="modal" data-bs-target="#add-question"></i>
                    </p>
                    <ol type="a">
                        <li>Velocity is constant</li>
                        <li>Distance is constant</li>
                        <li>Displacement is constant</li>
                        <li>Speed is constant <i class="fa fa-check-square correct" aria-hidden="true"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Correct Answer"></i></li>
                    </ol>

                    <p class="question-difficutly">Difficulty: <span class="easy">Easy</span></p>
                </div>
                <div class="question">
                    <p class="question-body">
                        1- In a uniform cicular motion:
                        <i class="fa fa-edit" data-bs-toggle="modal" data-bs-target="#add-question"></i>
                    </p>
                    <ol type="a">
                        <li>Velocity is constant</li>
                        <li>Distance is constant</li>
                        <li>Displacement is constant</li>
                        <li>Speed is constant <i class="fa fa-check-square correct" aria-hidden="true"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Correct Answer"></i></li>
                    </ol>

                    <p class="question-difficutly">Difficulty: <span class="easy">Easy</span></p>
                </div>
                <div class="question">
                    <p class="question-body">
                        1- In a uniform cicular motion:
                        <i class="fa fa-edit" data-bs-toggle="modal" data-bs-target="#add-question"></i>
                    </p>
                    <ol type="a">
                        <li>Velocity is constant</li>
                        <li>Distance is constant</li>
                        <li>Displacement is constant</li>
                        <li>Speed is constant <i class="fa fa-check-square correct" aria-hidden="true"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Correct Answer"></i></li>
                    </ol>

                    <p class="question-difficutly">Difficulty: <span class="easy">Easy</span></p>
                </div>


            </div>
            <div class="modal magictime vanishIn" id="add-question" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa fa-edit" aria-hidden="true"></i> Edit Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="question">
                                
                                <input type="text" class="quest-edit" value="In a uniform cicular motion:" placeholder="Question Head">
                                <ol type="a">
                                    <li><input type="text" value="Velocity is constant" placeholder="Answer 1" > </li>
                                    <li><input type="text" value="Distance is constant" placeholder="Answer 2" >  </li>
                                    <li><input type="text" value="Displacement is constant"  placeholder="Answer 3"  > </li>
                                    <li><input type="text" value="Speed is constant"  placeholder="Answer 4"> </li>
                                </ol>
                                <p class="question-difficutly">Answer: 
                                    <select>
                                        <option>a</option>
                                        <option>b</option>
                                        <option>c</option>
                                        <option>d</option>
                                    </select>
                                </p>
                                <p class="question-difficutly">Difficulty: 
                                    <select>
                                        <option>Easy</option>
                                        <option>Medium</option>
                                        <option>Hard</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/question-bank.js"></script>
</body>

</html>
