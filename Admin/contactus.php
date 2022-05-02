<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
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



            <section class="container content" >

                <div class="title">Contact Us</div>
                <div class="table-content">
                    <table class="table table-responsive ">
                        
                        <tbody>
                            <tr class="table-head">
                                <td scope="col">#</td>
                                <td scope="col">Username</td>
                                <td scope="col">Email</td>
                                <td scope="col">Status</td>
                                <td scope="col">Preview</td>
                                <td scope="col">Delete</td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <tr>
                                <td scope="row">1001</td>
                                <td>Physics 101</td>
                                <td>John Ebraham</td>
                                <td>50</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                <td class="del"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#remove-mess"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal magictime swashIn" id="remove-mess" tabindex="-1" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"><i class="fa-solid fa-trash-alt"></i> Remove</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p class="text-start fw-bolder">Are you sure to delete this? </p>
                              
                              
                            </div>
                            <div class="modal-footer">
                              
                              <button type="button" class="">Yes</button>
                              <button type="button">Cancel</button>
                            </div>
                          </div>
                        </div>
                </div>



            </section>
        </div>
    </div>
    </div>
    <!--Scripts part-->
    <script src="js/admin.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>