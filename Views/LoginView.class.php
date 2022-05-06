<?php
    class ProfLoginView extends ProfLoginCont {

        
        private $email;
        private $password;
    
        
        
        // make constructor to equal the properties with the parameters inside the constructor
        public function __construct($email, $password)
        {
            $this->password = $password;
            $this->email = $email;
        }

        //  don't return error لو الكل الفانكشنز اللي تحت دي مشsignup for user  المفروض هعمل فانكشن تعملي 

       
        public function ProfLogin()
        {
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../Home/login.php?error=emptyinput");
                exit();
            }  

            $this->getProfessor($this->email,$this->password);
            

        }

        //  ----------------  check if there any empty input  -------------------

        private function emptyInput()
        {   
            $result = false; // assign the (value true or false) in it
            
            
            if(empty($this->email) || empty($this->password) )
            {
                $result = false; 
            }
            else
            {
                $result = true;
            }
            return $result;
        }

       

    }

//--------------------------------------
    class StudLoginView extends StudLoginCont {

        
        private $email;
        private $password;
    
        
        
        // make constructor to equal the properties with the parameters inside the constructor
        public function __construct($email, $password)
        {
        
            
            $this->password = $password;
            $this->email = $email;

            
            
            
            

        }

        //  don't return error لو الكل الفانكشنز اللي تحت دي مشsignup for user  المفروض هعمل فانكشن تعملي 

       
        public function StudLogin()
        {
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../Home/login.php?error=emptyinput");
                exit();
            }  

            $this->getStudent($this->email,$this->password);
            

        }

        //  ----------------  check if there any empty input  -------------------

        private function emptyInput()
        {   
            $result = false; // assign the (value true or false) in it
            
            
            if(empty($this->email) || empty($this->password) )
            {
                $result = false; 
            }
            else
            {
                $result = true;
            }
            return $result;
        }

       

    }