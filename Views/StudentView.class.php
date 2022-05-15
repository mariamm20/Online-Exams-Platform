<?php 
class studentView extends studentCont
{
    public function showLevels()
    {
        $data =$this->getLevels();
        foreach($data as $level)
        {?>
            <option value="<?= $level['level_name'] ?>"><?= $level['level_name'] ?> </option>
        <?php    
        }
    }
    public function showDept($level_name)
    {
        $data = $this->getDept($level_name);
        foreach($data as $department)
        {?>
            <option value="<?= $department['dept_name'] ?>"><?= $department['dept_name'] ?> </option>
        <?php    
        }
    }
  // show student's exams 
    public function showExams()
    {
        $data = $this->getExams();
        foreach($data as $exam)
        {?>
            <tr>
                <th scope="row"><?= $exam['id'] ?></th>
                <td><?= $exam['exam_name'] ?></td>
                <td><?= $exam['exam_date'] ?></td>
                <td><?= $exam['start_time'] ?></td>
                <td><?= $exam['duration'] . " min" ?></td>
                <td><?= $exam['total_mark'] ?></td>
                <td>
                    <button> <a href="#"> Start </a> </button>
                </td>
            </tr>
        <?php
        }
    }
}