<?php
class examView extends examCont
{
    public function professorSubjects()
    {
       $data = $this->getProfessorSubjects();
        foreach($data as $subjects)
        {?>
            <option value="<?= $subjects['id'] ?>"><?= $subjects['subject_name'] ?></option>
        <?php                
        }
    }

    public function createExam($subject_id, $exam_name,$exam_date, $exam_start,$exam_end, $total_mark)
    {
        $this->createExamCont($subject_id, $exam_name,$exam_date, $exam_start,$exam_end, $total_mark);
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

    public function addStrucure($exam_id, $chapter_id, $num_of_questions, $difficulty, $type)
    {
        $this->addStructureCont($exam_id, $chapter_id, $num_of_questions, $difficulty, $type);
    }

}