<?php
class examCont extends DB
{
    protected function createExamCont($subject_name, $exam_name,$exam_date, $exam_start,$exam_duration, $total_mark  )
    {
        $sql = "INSERT into exams(subject_id, exam_name, exam_date, start_time, duration, total_mark) values ( ?, ?,?,?,?,?)";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($subject_name, $exam_name,$exam_date, $exam_start,$exam_duration, $total_mark));
    }

    protected function getProfessorSubjects()
    {
        $stmt = $this->Connection()->query("
        SELECT DISTINCT subjects.* from subjects
        join professor_subjects on subjects.id = professor_subjects.subject_id 
        join professors on professor_subjects.prof_id = " . $_SESSION['id']);
        $s_data = $stmt->fetchAll();
        return $s_data;
    }

}