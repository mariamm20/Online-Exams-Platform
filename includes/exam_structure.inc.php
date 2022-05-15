<?php
if(isset($_POST['add']))
{
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/examCont.class.php');
    include('../Views/examView.class.php');
    $exam = new examView();
    $subject_id = $_POST['subject_id'];
    $exam_name = $_POST['exam_name'];
    $chapter_id = $_POST['chapter_id'];

    if(isset($_POST['mcq_check']))
    {
        
       
        if(isset($_POST['num_of_easy_questions']))
        {
            $num_of_questions = $_POST['num_of_easy_questions']  ;
            $difficulty = "easy"  ;
            $type = "choice" ;
            $array1 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['num_of_medium_questions']))
        {
            $num_of_questions = $_POST['num_of_medium_questions']  ;
            $difficulty = "medium"  ;
            $type = "choice";
            $array2 = array($exam_name, $chapter_id,$num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['num_of_hard_questions']))
        {
            $num_of_questions = $_POST['num_of_hard_questions'] ;
             $difficulty = "hard" ;
            $type = "choice" ;
            $array3 = array($exam_name, $chapter_id,$num_of_questions, $difficulty, $type);
        }
        $array = array($array1, $array2, $array3);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        
       
        foreach($array as $strucutres)
        {
          
            $exam->addStrucure($strucutres[0],$strucutres[1],$strucutres[2],$strucutres[3], $strucutres[4]  );
         
            
        }

    }
    if(isset($_POST['TF_check']))
    {
        
       
        if(isset($_POST['num_of_easy_questions']))
        {
            $num_of_questions = $_POST['easy_questions']  ;
            $difficulty = "easy"  ;
            $type = "true&false" ;
            $array1 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }

        if(isset($_POST['num_of_medium_questions']))
        {
            $num_of_questions = $_POST['medium_questions']  ;
            $difficulty = "medium"  ;
            $type = "true&false";
            $array2 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }

        if(isset($_POST['num_of_hard_questions']))
        {
            $num_of_questions = $_POST['hard_questions'] ;
            $difficulty = "hard" ;
            $type = "true&false" ;
            $array3 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }

        $array = array($array1, $array2, $array3);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        
        foreach($array as $strucutres)
        {
          
            $exam->addStrucure($strucutres[0],$strucutres[1],$strucutres[2],$strucutres[3], $strucutres[4]  );
         
            
        }

    }
    header('location: ../Home/second-creation-form.php?subject_id='.$subject_id.'&exam_name='.$exam_name);

}

///////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['create']))
{
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/examCont.class.php');
    include('../Views/examView.class.php');
    $exam = new examView();
    $subject_id = $_POST['subject_id'];
    $exam_name = $_POST['exam_name'];
    $chapter_id = $_POST['chapter_id'];

    if(isset($_POST['mcq_check']))
    {
        
       
        if(isset($_POST['num_of_easy_questions']))
        {
            $num_of_questions = $_POST['num_of_easy_questions']  ;
            $difficulty = "easy"  ;
            $type = "choice" ;
            $array1 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['num_of_medium_questions']))
        {
            $num_of_questions = $_POST['num_of_medium_questions']  ;
            $difficulty = "medium"  ;
            $type = "choice";
            $array2 = array($exam_name, $chapter_id,$num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['num_of_hard_questions']))
        {
            $num_of_questions = $_POST['num_of_hard_questions'] ;
             $difficulty = "hard" ;
            $type = "choice" ;
            $array3 = array($exam_name, $chapter_id,$num_of_questions, $difficulty, $type);
        }
        $array = array($array1, $array2, $array3);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        
       
        foreach($array as $strucutres)
        {
          
            $exam->addStrucure($strucutres[0],$strucutres[1],$strucutres[2],$strucutres[3], $strucutres[4]  );
         
            
        }

    }
    if(isset($_POST['TF_check']))
    {
        
       
        if(isset($_POST['easy_questions']))
        {
            $num_of_questions = $_POST['easy_questions']  ;
            $difficulty = "easy"  ;
            $type = "true&false" ;
            $array1 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['medium_questions']))
        {
            $num_of_questions = $_POST['medium_questions']  ;
            $difficulty = "medium"  ;
            $type = "true&false";
            $array2 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }
        if(isset($_POST['hard_questions']))
        {
            $num_of_questions = $_POST['hard_questions'] ;
             $difficulty = "hard" ;
            $type = "true&false" ;
            $array3 = array($exam_name, $chapter_id, $num_of_questions, $difficulty, $type);
        }
        $array = array($array1, $array2, $array3);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        
        foreach($array as $strucutres)
        {
          
            $exam->addStrucure($strucutres[0],$strucutres[1],$strucutres[2],$strucutres[3], $strucutres[4]  );
        }

    }
    header('location: ../Home/subjects.php?created');

}