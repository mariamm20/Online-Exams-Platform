<?php

class ProfLoginCont extends DB
{
    protected function getProfessor($email, $password)
    {
        
        $stmt = $this->Connection()->prepare('SELECT password FROM professors WHERE email =?');
        

         
        if (!$stmt->execute([$email]))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/prof-login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0)
        {            
            header("location: ../Home/prof-login.php?error=usernotfoundProf" ); 
            exit();
        }

        

        $hashedpass = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpass =password_verify($password,$hashedpass[0]['password'] );

        if($checkpass == false)
        {
            echo "wrong password";
            $stmt = null;
            header("location: ../Home/prof-login.php?error=wrongpassword");
            exit();
        }
        elseif($checkpass == true)
        {
            $stmt = $this->Connection()->prepare('SELECT * FROM professors WHERE email =? or password = ?;');
            
            

            if (!  $stmt->execute(array($email,$password)))
            {
                $stmt = null;  // if it faild the statement will be closed
                header("location: ../Home/prof-login.php?error=stmt2failed");
                exit();
            }

            if($stmt->rowCount()== 0)
            {
                $stmt = null;
                header("location: ../Home/prof-login.php?error=usernotfound2");
                exit();
            }
        
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();


            $_SESSION["id"] = $user[0]["id"];
            $_SESSION['user_name'] =$user[0]['user_name'];
            $_SESSION["email"] = $user[0]["email"];
            $_SESSION['role'] =$user[0]['role'];
            $stmt = null;
                
            
            $query = "UPDATE professors set login_at = now()  where id = ". $_SESSION['id'];
            $stmt= $this->Connection()->query($query);

        }

        $stmt =null;
    
    }


  

}


class StudLoginCont extends DB{
    protected function getStudent($email, $password)
    {
        
        $stmt = $this->Connection()->prepare('SELECT password FROM students WHERE email =?');
        

         
        if (!$stmt->execute([$email]))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0)
        {            
            header("location: ../Home/stud-login.php?error=usernotfoundstud" ); 
            exit();
        }

        

        $hashedpass = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpass =password_verify($password,$hashedpass[0]['password'] );

        if($checkpass == false)
        {
            echo "wrong password";
            $stmt = null;
            header("location: ../Home/stud-login.php?error=wrongpassword");
            exit();
        }
        elseif($checkpass == true)
        {
            $stmt = $this->Connection()->prepare('SELECT * FROM students WHERE email =? or password = ?;');
            
            

            if (!  $stmt->execute(array($email,$password)))
            {
                $stmt = null;  // if it faild the statement will be closed
                header("location: ../Home/stud-login.php?error=stmt2failed");
                exit();
            }

            if($stmt->rowCount()== 0)
            {
                $stmt = null;
                header("location: ../Home/stud-login.php?error=usernotfound2");
                exit();
            }
        
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();


            $_SESSION["id"] = $user[0]["id"];
            $_SESSION['user_name'] =$user[0]['user_name'];
            $_SESSION["email"] = $user[0]["email"];
            $_SESSION['role'] =$user[0]['role'];
            $stmt = null;
                
            
            $query = "UPDATE students set login_at = now()  where id = ". $_SESSION['id'];
            $stmt= $this->Connection()->query($query);

        }

        $stmt =null;
    }
}