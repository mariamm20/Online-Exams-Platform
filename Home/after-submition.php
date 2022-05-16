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
    <link rel="stylesheet" href="css/after-submition.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header_prof_stud.inc.php'); ?>
        <section class="section-one">
            <div class="thanks-section">
                <div class="inside-thanks-section">
                    <h4>Thanks For Your Efforts</h4>
                    <p>
                        You successfully submitted <br>
                        Your exam. Click on view <br>
                        result to get you result, Great Job.
                    </p>
                    <button onclick="show()">View Result</button>
                    <div class="result magictime swashIn">
                        <p>
                            Your Result: <span>15</span> / <span>15</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-right">
                <img src="img/success.png" alt="img" />
            </div>

        </section>





    </div>
    <!--Scripts part-->
    <script>
        let x = document.querySelector('.result');

        function show() {
            if (x.style.display = 'none') {
                x.style.display = 'block'

            } else {
                x.style.display = 'none'
            }
        }
    </script>

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>

</body>

</html>