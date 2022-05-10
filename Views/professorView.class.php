<?php
class professorView extends professorCont
{
    public function showSubjects()
    {
        $data = $this->subjectsCont();
        foreach($data as $subjects)
        { 
            ?>
            
            <li class="list-group-item" onclick="show()" data-sid="<?=$subjects['id'] ;?>"   value="<?=$subjects['id'] ;?>" >  <?=$subjects['subject_name'] ;?> </li>
        <?php
            
        }
        
    }
    public function showChapters($sub_id)
    {
        $data = $this->chaptersCont($sub_id);
       foreach($data as $chapters)
       {?>
                  
        <li class="list-group-item"  id="chapter"><a href="question-bank.php?chapter_id=<?= $chapters['id'] ?>"><?= $chapters['chapter_name'] ?> </a></li>
     <?php
       }
    }

    public function addChapter($sub_id, $chapter_name)
    {
        $this->addChapterCont($sub_id, $chapter_name);
    }

}