<?php

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullurl, "error=takenEmail")== true)          //error handling for existed email
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="This email is existed">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    ?>

    <?php
    if (strpos($fullurl, "error=InvalidEmail")== true)             // error handling for incorrect email 
                                                                   // مش شغاله عشان في بوب اب بيظهر اصلا
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please enter a valid email">
            <i class="fa-solid fa-circle-info" ></i>
         </lable>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=emptyinput")== true)             // error handling for impty input
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please fill all fields">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    ?>
    <?php
    if (strpos($fullurl, "error=passwordDoesntMatch")== true)             // error handling for password matching
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="passwords are not the same">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php     
    }

    ?>

    <?php
    if (strpos($fullurl, "error=takenID")== true)             // error handling for academic id
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="This academic id is existed">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=invalidUserName")== true)             // error handling for User name
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please enter a valid user name">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 
    <?php
    if (strpos($fullurl, "error=invalidAcademicId")== true)             // error handling for Academic id
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="This Academic Id is not valid">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=invalidIdPassword")== true)             // error handling for ID password
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Your academic id is not valid">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 
    <?php
    if (strpos($fullurl, "error=incorrectID")== true)             // error handling for ID password
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Please Enter A Valid ID">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 
    <?php
    if (strpos($fullurl, "error=passwordlength")== true)             // error handling for password length
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="Your password must be atleast 8 characters">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 
    <?php
    if (strpos($fullurl, "error=idnotfound")== true)             // error handling for password length
    {?>
        <lable  data-bs-toggle="tooltip" data-bs-placement="top"
            title="This Academic Id is not found">
            <i class="fa-solid fa-circle-info"></i>
         </lable>
    <?php   
    }
    ?> 
    