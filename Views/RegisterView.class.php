<?php

class RegisterView extends RegisterCont
{
    private $user_name;  
    private $email;
    private $password;
    private $repeated_pass;
    private $role;
    private $academic_id;
    private $id_password;

    public function __construct($user_name, $email, $password, $repeated_pass, $role, $academic_id, $id_password)
    {
        $this->user_name= $user_name;
        
        $this->email = $email;
        $this->password = $password;
        $this->repeated_pass = $repeated_pass;
        $this->role = $role;
        $this->academic_id= $academic_id;
        $this->id_password = $id_password;
    }

    public function userRegisteration()
        {
            
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../Home/Register.php?error=emptyinput");
                exit();
            }

            if($this->validateUserName() == false)  
            {
            
                //echo "Invalid First Name!";
                header("location: ../Home/Register.php?error=invalidUserName");
                exit();
            }  

            if($this->validateAcademicId() == false)  
            {
                //echo "Invalid Last Name!";
                header("location: ../Home/Register.php?error=invalidAcademicId");
                exit();
            }  

            if($this->validateIdPassword() == false)  
            {
                
                //echo "Invalid Email!";
                header("location: ../Home/Register.php?error=invalidIdPassword");
                exit();
            }  
            if($this->passwordMatch() == false)  
            {
                
                //echo "password and repeat password are not the same";
                header("location: ../Home/Register.php?error=passwordDoesntMatch");
                exit();
            }  

            if($this->checkUserEmeil() == false)  
            {
               
                echo "This Email Is Already Taken!";
                header("location: ../Home/Register.php?error=takenEmail");
                exit();
            }  
            if($this->checkUserID() == false)  
            {
               
                echo "This Email Is Already Taken!";
                header("location: ../Home/Register.php?error=takenID");
                exit();
            }  

            if($this->validateEmail() == false)  
            {
                //echo "Invalid Phone Number";
                header("location: ../Home/Register.php?error=InvalidEmail");
                exit();
            }  
            // if($this->verifyID() == false)  
            // {
            //     //echo "Invalid Phone Number";
            //     header("location: ../Home/Register.php?error=incorrectID");
            //     exit();
            // }  
            
            
            
                


            $this->userSetUP($this->user_name,$this->email,$this->password, $this->role, $this->academic_id, $this->id_password);

        }

    // validation on inputs 

    private function EmptyInput()
    {
        $result = false;
        if(empty($this->user_name) || empty($this->academic_id) || empty($this->id_password) || empty($this->email) ||empty($this->password) ||empty($this->repeated_pass) || empty($this->role))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;

    }

    private function validateUserName()
    {
        $result = false;
            if(!preg_match('/^[ \w]+$/',$this->user_name ))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
    }
    private function validateAcademicId()
    {
        $result = false;
        if (strlen($this->academic_id) != 16 ) {
            $result = false;
        }
        else{
            $result = true;

        }
        return $result;

    }
    private function validateIdPassword()
    {
        $result = false;
        if (strlen($this->id_password) != 6) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;

    }
    private function validateEmail()
    {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch()
    {
        $result = false;
        if ($this->password != $this->repeated_pass)
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function checkUserEmeil(){
        $result = false;
        if(!$this->checkEmail($this->email))
        {
        
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    private function checkUserID(){
        $result = false;
        if(!$this->checkID($this->academic_id))
        {       
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function verifyID()
    {
        $result = false;
        if(!strpos($this->academic_id, "1618")== true)
        {
            $result = false;

        }
        else{
            $result = true;
        }
        return $result;
    }


}