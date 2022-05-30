<?php
class examView extends examCont
{
    public function professorSubjects()
    {
       $data = $this->getProfessorSubjects();
        foreach($data as $subjects)
        {?>
            <option value="<?= $subjects['id'] ?> " required><?= $subjects['subject_name'] ?></option>
        <?php                
        }
    }

    public function repeatedExam($exam_name, $subject_id)
    {
        
        if($this->repeatedExamCont($exam_name, $subject_id) == true)
        {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function createExam($subject_id, $exam_name,$exam_date, $exam_start,$duration)
    {
        $this->createExamCont($subject_id, $exam_name,$exam_date, $exam_start,$duration);
    }
   

    public function showChapters($subject_id)
    {
        $chapter_data = $this->getChapters($subject_id);
        foreach($chapter_data as $chapters)
        {?>
        
        <option value="<?= $chapters['id']?>"> <?= $chapters['chapter_name']?></option>
        <?php

        }
    }

    public function addStrucure($exam_id,$subject_id, $chapter_id, $num_of_questions, $difficulty, $type)
    {
        $this->addStructureCont($exam_id,$subject_id, $chapter_id, $num_of_questions, $difficulty, $type);
    }
    public function setMark($exam_id, $total)
    {
        $this->getMark($exam_id, $total);
    }

}