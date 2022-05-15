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
    protected function getChapters($subject_id)
    {
        $stmt = $this->Connection()->query("select * from chapters where subject_id = $subject_id");
        $data = $stmt->fetchAll();
        return $data;
        
    }
    // protected function getExamID($exam_name)
    // {
    //     $stmt = $this->Connection()->query("select id from exams where exam_name = '$exam_name' ");
    //     $data = $stmt->fetchAll();
    //     return $data;   
    // }
    protected function addStructureCont($exam_name, $chapter_id, $num_of_questions, $difficulty, $type)
    {
        $sql = "INSERT into exam_structure(exam_id, chapter_id, num_of_questions, difficulty,type) values ((select id from exams where exam_name =?), ?, ?,?,?);";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type));
    }
}