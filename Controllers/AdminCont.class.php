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
        $level_data = $stmt->fetchAll();
        return $level_data;
    }


    // the part of departments
    /*protected function addDeptContr($dept_name, $level_id)
    {
        $stmt = $this->Connection()->prepare("insert into departments(dept_name, level_id) values (?, ?)");
        $stmt->execute(array($dept_name, $level_id));
    }*/


    protected function getDepts()
    {
        $stmt = $this->Connection()->query("select * from departments");
        $dept_lvl_data = $stmt->fetchAll();
        return $dept_lvl_data;

        /*$stmt = $this->Connection()->query("
        SELECT DISTINCT departments.* from departments
        join dept_lvl on level.id = dept_lvl.level_id 
        join levels on dept_lvl.lvl_id =null ");
        $dept_lvl_data = $stmt->fetchAll();
        return $dept_lvl_data;*/
    }

    protected function addDeptLvlCont($level_id, $dept_id)
    {
        $stmt = $this->Connection()->prepare("insert into dept_lvl(level_id, dept_id) values (?, ?)");
        $stmt->execute(array($level_id, $dept_id));
    }

    /*protected function addDept_SubCont($id, $dept_id)
    {
        $stmt = $this->Connection()->prepare("insert into subjects(id, dept_id) values (?, ?)");
        $stmt->execute(array($id, $dept_id));
    }*/


    protected function getDeptSub($id)
    {
        $stmt = $this->Connection()->query("
        SELECT DISTINCT subjects.* from subjects
        join dept_sub on subjects.id = dept_sub.subject_id 
        join departments on dept_sub.dept_id = " . $id);
        $dept_sub_data = $stmt->fetchAll();
        return $dept_sub_data;
    }


    protected function addDeptSubCont($subject_id, $dept_id)
    {
        $stmt = $this->Connection()->prepare("insert into dept_sub(subject_id, dept_id) values (?, ?)");
        $stmt->execute(array($subject_id, $dept_id));
    }


    //SELECT p.id , p.user_name , s.subject_name from professors as p join professor_subjects on p.id = professor_subjects.prof_id join subjects as s on s.id = professor_subjects.subject_id;
    //$sqlstudents = "SELECT * FROM coursestudent INNER JOIN students ON coursestudent.studentid=students.studentid WHERE courseid='$counter'";


    // the part of contact us
    protected function getContact()
    {
        $stmt = $this->Connection()->query("select * from contact");
        $contact_data = $stmt->fetchAll();
        return $contact_data;
    }

    /* protected function getMsg()
    {
        $stmt = $this->Connection()->query("select msg from contact where id=1");
        $msg_data = $stmt->fetchAll();
        return $msg_data;
    } */

    protected function deleteContactContr($id)
    {
        $sql = "delete from contact where id =? ";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($id));
    }
}
