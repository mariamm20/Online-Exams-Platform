<?php
class StudRegisterCont extends DB
{
    protected function userSetUP($user_name, $email, $password,$academic_id, $level, $department)
    {
        $query = "INSERT into users (user_name, email, password, role, academic_id,level, department, created_at) values (?, ?, ?, 'professor', ?,?,? now())";
        $stmt = $this->Connection()->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         
        if (!  $stmt->execute(array($user_name, $email, $hashedPassword,$academic_id, $level, $department)))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/stud-register.php?error=registrationFailed");
            exit();
        }

        $stmt =null;
        
       




    }

    // check if email  is already existed in the database so, if it exists we don't want to signup this user again

    protected function checkEmail($email){

        
        $stmt = $this->Connection()->prepare('SELECT * FROM users WHERE  email = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($email))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-register.php?error=stmt1failed");
            exit();
        }
        // check if we got any results back in the database
        // check if we have any rows that returned from this query up  
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of errors  
        {
            
            
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
        
    }

    protected function checkID($academic_id){

        
        $stmt = $this->Connection()->prepare('SELECT * FROM users WHERE  academic_id = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($academic_id))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-register.php?error=stmt2failed");
            exit();
        }
        // check if we got any results back in the database
        // check if we have any rows that returned from this query up  
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of errors  
        {
            
            
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
        
    }

}