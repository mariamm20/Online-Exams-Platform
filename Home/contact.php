<?php
session_start();
include('../Controllers/dbconnection.class.php');
?>

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
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>
    <div id="app">
        
        <?php include('../includes/header.inc.php') ?>

        <section class="section-one">
            <div class="image-section" data-aos="fade-left">
                <img src="img/7.jpg" alt="img" />
            </div>
            <div class="form-section">


                <form action="../includes/contact.inc.php" method="post">
                    <h4>Contact Us</h4>
                    <fieldset class="inputs">
                        <input type="text" name="name" placeholder="Your Name" required value="<?= $_SESSION['user_name'] ?>"/>
                        <input type="email" name="email" placeholder="Email" required value="<?= $_SESSION['email'] ?>" />
                        <textarea name="msg" placeholder="What is your problem?" required></textarea>
                        <div id="btn-div">
                            <button name="send">Send</button>
                        </div>
                    </fieldset>
                </form>


            </div>
        </section>

    </div>
    <!--Scripts part-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="../assests/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if(isset($_GET['sent']) and isset($_GET['professor']))
        {?>
            <script>
            
            swal({
            title: 'the message has been sent',
            text: 'Thanks...',
            icon: 'success',
            timer: 3000,
            buttons: false,
            })
            .then(() => {
            window.location.href = '../Home/professor.php' ;
            
            })
            </script>
        <?php  
        }

        if(isset($_GET['sent']) and isset($_GET['student']))
        {?>
            <script>
            
            swal({
            title: 'your message has been set',
            text: 'Thanks...',
            icon: 'success',
            timer: 3000,
            buttons: false,
        })
        .then(() => {
        window.location.href = '../Home/student.php' ;
        
        })
        </script>
        <?php  
        }



        ?>
</body>

</html>