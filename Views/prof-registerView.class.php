<?php

class RegisterView extends RegisterCont
{
    private $user_name;  
    private $email;
    private $password;
    private $academic_id;
   

    public function __construct($user_name, $email, $password, $academic_id,)
    {
        $this->user_name= $user_name;
        
        $this->email = $email;
        $this->password = $password;
        $this->academic_id= $academic_id;
    }

    public function userRegisteration()
        {
            
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../Home/prof-register.php?error=emptyinput");
                exit();
            }

            if($this->validateUserName() == false)  
            {
            
                //echo "Invalid First Name!";
                header("location: ../Home/prof-register.php?error=invalidUserName");
                exit();
            }  

            if($this->validateAcademicId() == false)  
            {
                //echo "Invalid Last Name!";
                header("location: ../Home/prof-register.php?error=invalidAcademicId");
                exit();
            }  

            
            
            if($this->checkUserEmeil() == false)  
            {
               
                echo "This Email Is Already Taken!";
                header("location: ../Home/prof-register.php?error=takenEmail");
                exit();
            }  
            if($this->checkUserID() == false)  
            {
               
                echo "This Email Is Already Taken!";
                header("location: ../Home/prof-register.php?error=takenID");
                exit();
            }  

            if($this->validateEmail() == false)  
            {
                //echo "Invalid Phone Number";
                header("location: ../Home/prof-register.php?error=InvalidEmail");
                exit();
            }  
            // if($this->verifyID() == false)  
            // {
            //     //echo "Invalid Phone Number";
            //     header("location: ../Home/prof-register.php?error=incorrectID");
            //     exit();
            // }  
            
            
            
                


            $this->userSetUP($this->user_name,$this->email,$this->password, $this->academic_id,);

        }

    // validation on inputs 

    private function EmptyInput()
    {
        $result = false;
        if(empty($this->user_name) || empty($this->academic_id)  || empty($this->email) ||empty($this->password) )
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