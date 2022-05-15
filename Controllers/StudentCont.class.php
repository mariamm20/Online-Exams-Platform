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


    // the part of result history
    protected function getStudResultSheet()
    {
        $stmt = $this->Connection()->query(
            "SELECT results.id, results.student_id, results.exam_id, results.result, 
                    students.id, 
                    exams.id, exams.exam_name, exams.exam_date, exams.start_time, exams.duration, exams.total_mark
            FROM results
            INNER JOIN students ON results.student_id = students.id
            INNER JOIN exams ON results.exam_id = exams.id
            WHERE results.exam_id =exams.id AND students.id = ".$_SESSION['id']
        );
        $data = $stmt->fetchAll();
        return $data;
    }


    // the part of subjects and question bank
    protected function subjectsStudCont()
    {
        $stmt = $this->Connection()->query(
            "SELECT subjects.id, subjects.subject_name, subjects.level_id, subjects.dept_id,
                    students.id, students.level_id, students.dept_id
            FROM subjects
            INNER JOIN students ON subjects.level_id = students.level_id AND subjects.dept_id = students.dept_id
            WHERE students.id = ".$_SESSION['id']
        );
        $s_data = $stmt->fetchAll();
        return $s_data;
    }
}