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


    // the part of result history
    public function showStudResultSheet()
    {
        $data = $this->getStudResultSheet();
        foreach ($data as $sheet) {
        ?>
            <tr>
                <td><?= $sheet['id'] ?></td>
                <td><?= $sheet['exam_name'] ?></td>
                <td><?= $sheet['exam_date'] ?></td>
                <td><?= $sheet['start_time'] ?></td>
                <td><?= $sheet['duration'] ?></td>
                <td><?= $sheet['total_mark'] ?></td>
                <td><?= $sheet['result'] ?></td>
            </tr>
        <?php
        }
    }


    //the part of subjects and question bank
    public function showStudSubjects()
    {
        $data = $this->subjectsStudCont();
        foreach($data as $subjects)
        { ?>
            <li class="list-group-item" onclick="show()" data-sid="<?=$subjects['id'] ;?>"   value="<?=$subjects['id'] ;?>" >  <?=$subjects['subject_name'] ;?> </li>
        <?php
            
        }
        
    }
}