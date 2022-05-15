<?php

class studentCont extends DB
{
    protected function getLevels()
    {
        $stmt = $this->Connection()->query("select * from levels");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function getDept($level_name)
    {
        
        $stmt = $this->Connection()->query("select * from departments where level_id = (SELECT id from levels where level_name = '$level_name' ) " );
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getExams()
    {
        $query = "select * from exams join subjects 
        on exams.subject_id = subjects.id where subjects.level_id =" . $_SESSION['level_id'] .
        " and subjects.dept_id =" . $_SESSION['dept_id'];
        $stmt = $this->Connection()->query($query);
        $data = $stmt->fetchAll();
        return $data;
    }
}