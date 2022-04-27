<?php

class AdminCont extends DB
{
    protected function getProfessors()
    {
        $stmt = $this->Connection()->query("select * from professors ");
        $prof_data = $stmt->fetchAll();
        return $prof_data;
     
    }
    protected function getSubjects()
    {
        $prof= $this->getProfessors();
        foreach($prof as $professer)
        {
           echo $id = $professer['id'];
           $stmt = $this->Connection()->query("select s.subject_name, s.prof_id , p.id from subjects as s join professors as p on s.prof_id = p.id  where prof_id = ". $id);
           $s_data = $stmt->fetchAll();
           return $s_data;
        }
        
        

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
}
