<?php
if(isset($_POST['edit']))
{
    $question_id = $_POST['question_id'];
    $question_text = $_POST['question_text'];
    $is_correct = $_POST['is_correct'];
    $difficulty = $_POST['difficulty'];
    
    include('../Controllers/dbconnection.class.php');
    include('../Controllers/professorCont.class.php');
    include('../Views/professorView.class.php');
    $proffesor = new ProfessorView();
    $proffesor->editQuestions($question_text, $difficulty, $question_id);

    $data = $_POST['array'];
    if($_POST['type'] == "choose")
        {
            $answer1 =  $data['a'];
            $answer2 =  $data['b'];
            $answer3 =  $data['c'];
            $answer4 =  $data['d'];
           
            $array = array($answer1, $answer2, $answer3, $answer4);
            foreach($array as $answer)
            {       
                $proffesor->editAnswers($answer, $is_correct, $question_id);
            }
            
            
        }



    

    header('location:'.$_SERVER['HTTP_REFERER'].'edited' );
} 
else{ echo "failed";}