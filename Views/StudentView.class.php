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
}