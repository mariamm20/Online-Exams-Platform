<?php

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullurl, "error=emptyinput")== true)          //error handling for empty inputs
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please fill all fields">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    if (strpos($fullurl, "error=stmtfailed")== true)          //error handling for failed entering
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Login failed">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    if (strpos($fullurl, "error=usernotfound")== true)          //error handling for unsigned user
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please sign up first">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    if (strpos($fullurl, "error=wrongpassword")== true)          //error handling for wrong password
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="This password is wrong">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }



    //-------------------------------------------------
    if (strpos($fullurl, "error=stmt2failed")== true)          //error handling for wrong password
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="An error has happened">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }


    if (strpos($fullurl, "error=usernotfound2")== true)          //error handling for unsigned user
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please Sign Up">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }



