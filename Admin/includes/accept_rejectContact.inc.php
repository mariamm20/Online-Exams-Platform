<?php
// the part of accept contact
if(isset($_POST['accept']))
{
    $state="Accepted";
    $id = $_POST['id'];
    echo $id;

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminview = new AdminView();
    $adminview->acceptContact($state, $id);

    header('location: ../contactus.php?ContactAccepted_id='.$id);
}


// the part of reject contact
if(isset($_POST['reject']))
{
    $state="Rejected";
    $id = $_POST['id'];
    echo $id;

    include('../../Controllers/dbconnection.class.php');
    include('../../Controllers/AdminCont.class.php');
    include('../../Views/AdminView.class.php');

    $adminview = new AdminView();
    $adminview->rejectContact($state, $id);

    header('location: ../contactus.php?ContactRejected_id='.$id);
}

