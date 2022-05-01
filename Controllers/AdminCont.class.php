<?php

class AdminCont extends DB
{
    protected function getProfessors()
    {
        $stmt = $this->Connection()->query("select * from professors ");
        $prof_data = $stmt->fetchAll();
        return $prof_data;
     
    }
    // بجيب هنا الماد بتاعت كل بروفيسور
    protected function getSubjects($id)
    {
        
        
            $stmt = $this->Connection()->query("
            SELECT DISTINCT subjects.* from subjects
            join professor_subjects on subjects.id = professor_subjects.subject_id 
            join professors on professor_subjects.prof_id = " . $id);
            $s_data = $stmt->fetchAll();
            return $s_data;
           
        }
        
        
        
          
        
        

   

    
    
    protected function getProfessorRequests()
    {
        $stmt = $this->Connection()->query("select id, user_name, academic_id, email from professors where state is null ");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function acceptRequest()
    {
        $state = $_GET["state"];
        $id = $_GET["id"];
        $this->Connection()->query("UPDATE professors SET state = $state WHERE id = $id ");
    }
    
    protected function getRequestsNumber() {
        $sql = "SELECT COUNT(*) FROM professors where state is Null";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }    
    protected function getProfessorsNumber() {
        $sql = "SELECT COUNT(*) FROM professors where state = 1 ";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }    
    protected function getStudentsNumber() {
        $sql = "SELECT COUNT(*) FROM students ";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }    

    protected function deleteProf($id)
    {
        
        $sql = "delete from professors where id =? ";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($id));
    }

    protected function addSubjectCont($prof_id, $subject_id)
    {
        $stmt = $this->Connection()->prepare("insert into professor_subjects(prof_id, subject_id) values (?, ?)");
        $stmt->execute(array($prof_id, $subject_id));
    }

    protected function getAllSubjects()
    {
        $stmt = $this->Connection()->query("select * from subjects ");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function deleteSubjectCont($sub_id, $prof_id)
    {
        $sql = "delete from professor_subjects where subject_id =? and prof_id = ?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($sub_id, $prof_id));

    }

    // the part of levels and departments------------
    protected function addLevelContr($level_name)
    {
        
        $stmt = $this->Connection()->prepare("insert into levels(level_name) values (?)");
        $stmt->execute(array($level_name));
    }


    //SELECT p.id , p.user_name , s.subject_name from professors as p join professor_subjects on p.id = professor_subjects.prof_id join subjects as s on s.id = professor_subjects.subject_id;
}
