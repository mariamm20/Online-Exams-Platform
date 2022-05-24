<?php

class AdminCont extends DB
{
    protected function getProfessors()
    {
        $stmt = $this->Connection()->query("select * from professors where state = 1 ");
        $prof_data = $stmt->fetchAll();
        return $prof_data;
    }

    // بجيب هنا المادة بتاعت كل بروفيسور
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

    protected function getRequestsNumber()
    {
        $sql = "SELECT COUNT(*) FROM professors where state is Null";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }

    protected function getProfessorsNumber()
    {
        $sql = "SELECT COUNT(*) FROM professors where state = 1 ";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }
    protected function getFinishedExams()
    {
        $sql = "SELECT COUNT(*) FROM results ";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }
    protected function getSuccessExams()
    {
        $sql = "SELECT COUNT(*) FROM exams ";
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }


    protected function getStudentsNumber()
    {
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


    // the part of levels 
    protected function addLevelContr($level_name)
    {
        $stmt = $this->Connection()->prepare("insert into levels(level_name) values (?)");
        $stmt->execute(array($level_name));
    }

    protected function getLevels()
    {
        $stmt = $this->Connection()->query("select * from levels ");
        $data = $stmt->fetchAll();
        return $data;

    }

    protected function getDepartments($level_id)
    {
        $stmt = $this->Connection()->query("select * from departments where level_id = $level_id ");
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getDepartmentSubjects($level_id, $dept_id)
    {
        $stmt = $this->Connection()->query("select * from subjects where level_id = $level_id and dept_id = $dept_id ");
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function addDepartmentCont($name, $level_id)
    {
        $stmt =$this->Connection()->prepare("INSERT into departments (dept_name, level_id) values (?,?)");
        $stmt->execute(array($name, $level_id));
    }

    protected function addDeptSubjectCont($name, $level_id, $dept_id)
    {
        
        $stmt = $this->Connection()->prepare("INSERT into subjects (subject_name, level_id,dept_id) values (?,?,?)");
        $stmt->execute(array($name, $level_id, $dept_id));
    }
    
    protected function deleteSub($id)
    {
        $sql = "delete from subjects where id = ?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($id));
    }

    protected function deleteDepartmentCont($id)
    {
        $sql = "delete from departments where id = ?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($id));
    }

    protected function deleteLevelCont($level_id)
    {
        $stmt = $this->Connection()->prepare("delete from levels where id = ?");
        $stmt->execute(array($level_id));
    }


    // the part of contact us
    protected function getContact()
    {
        $stmt = $this->Connection()->query("select * from contact");
        $contact_data = $stmt->fetchAll();
        return $contact_data;
    }

    protected function acceptContactContr($state, $id)
    {
        // $state = $_GET["state"];
        // $id = $_GET["id"];
        // $this->Connection()->query("UPDATE contact SET state = $state WHERE id = $id ");
        $stmt = $this->Connection()->prepare("UPDATE contact SET state = ? WHERE id = ? ");
        $stmt->execute(array($state, $id));
    }

    protected function rejectContactContr($state, $id)
    {
        /* $stmt = $this->Connection()->prepare("delete from contact where id =? ");
        $stmt->execute(array($id)); */
        /* $state = $_GET["state"];
        $id = $_GET["id"]; */
        $stmt = $this->Connection()->prepare("UPDATE contact SET state = ? WHERE id = ? ");
        $stmt->execute(array($state, $id));
    }

    
}
