<?php
 
class LoginCont extends Db 
{
    // set the user data
    protected function getUser($email, $password)
    {
        
        $stmt = $this->Connection()->prepare('SELECT password FROM users WHERE email =?');
        

         
        if (!$stmt->execute([$email]))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../Home/stud-login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0)
        {            
            header("location: ../Home/stud-login.php?error=usernotfound" ); 
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
            $stmt = $this->Connection()->prepare('SELECT * FROM users WHERE email =? or password = ?;');
            
            

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
                
            
            $query = "UPDATE users set login_at = now()  where id = ". $_SESSION['id'];
            $stmt= $this->Connection()->query($query);

        }

        $stmt =null;
    
    }

    //-------------------------------------------------------------------------------------------------------


  

   
}
