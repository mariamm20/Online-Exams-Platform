<?php
class RegisterCont extends DB
{
    protected function userSetUP($user_name, $email, $password,$academic_id)
    {
        $query = "INSERT into professors (user_name, email, password, role, academic_id, created_at, state) values (?, ?, ?, 'professor', ?, now(), null)";
        $stmt = $this->Connection()->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         
        if (!  $stmt->execute(array($user_name, $email, $hashedPassword,$academic_id)))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/prof-register.php?error=registrationFailed");
            exit();
        }

        $stmt =null;
        
       




    }

    // check if email  is already existed in the database so, if it exists we don't want to signup this user again

    protected function checkEmail($email){

        
        $stmt = $this->Connection()->prepare('SELECT * FROM professors WHERE  email = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($email))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/prof-register.php?error=stmt1failed");
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

        
        $stmt = $this->Connection()->prepare('SELECT * FROM professors WHERE  academic_id = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($academic_id))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/prof-register.php?error=stmt2failed");
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
    protected function checkAcademicID($academic_id)
    {
        $stmt = $this->Connection()->prepare('SELECT * FROM ids WHERE  academic_id = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($academic_id))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-register.php?error=stmt2failed");
            exit();
        }
        
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of rows  
        {
            
            
            $resultCheck = true;
        }
        else{
            $resultCheck = false;
        }
        return $resultCheck;
        
    }


}

class StudRegisterCont extends DB
{
    protected function userSetUP($user_name, $email, $password,$academic_id, $level, $department)
    {
        $query = "INSERT into students (user_name, email, password,academic_id,level, department,role, created_at, level_id, dept_id) values (?, ?, ?, ?,?,?,'student', now(),  (SELECT id from levels where level_name = '$level'), (SELECT id from departments where dept_name = '$department'  and level_id = (SELECT id from levels where level_name = '$level')))";
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

        
        $stmt = $this->Connection()->prepare('SELECT * FROM students WHERE  email = ? ;');
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

        
        $stmt = $this->Connection()->prepare('SELECT * FROM students WHERE  academic_id = ? ;');
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
    protected function checkAcademicID($academic_id)
    {
        $stmt = $this->Connection()->prepare('SELECT * FROM ids WHERE  academic_id = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($academic_id))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-register.php?error=stmt2failed");
            exit();
        }
        
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of rows  
        {
            
            
            $resultCheck = true;
        }
        else{
            $resultCheck = false;
        }
        return $resultCheck;
        
    }

    

}