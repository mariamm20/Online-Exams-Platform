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

    public function createExam($subject_id, $exam_name,$exam_date, $exam_start,$exam_duration, $total_mark)
    {
        $this->createExamCont($subject_id, $exam_name,$exam_date, $exam_start,$exam_duration, $total_mark);
    }
}