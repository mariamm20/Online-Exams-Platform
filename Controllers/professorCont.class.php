<?php
class professorCont extends DB
{
    protected function subjectsCont()
    {
        $stmt = $this->Connection()->query("
        SELECT DISTINCT subjects.* from subjects
        join professor_subjects on subjects.id = professor_subjects.subject_id 
        join professors on professor_subjects.prof_id = " . $_SESSION['id']);
        $s_data = $stmt->fetchAll();
        return $s_data;
    }

    protected function chaptersCont($sub_id)
    {
        
        $stmt = $this->Connection()->query("select * from chapters where subject_id =" .  $sub_id);
        $ch_data = $stmt->fetchAll();
        return $ch_data;

    }
    
    protected function addChapterCont($sub_id, $chapter_name)
    {
        $stmt = $this->Connection()->prepare("insert into chapters (subject_id, chapter_name) values (?, ?)");
        $stmt->execute(array($sub_id, $chapter_name));
    }
}

