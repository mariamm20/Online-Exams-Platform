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
}