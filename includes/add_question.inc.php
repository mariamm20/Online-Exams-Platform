<?php
session_start();

    if(isset($_POST['action']))
    {
       
            echo $chapter_id = $_GET['ch_id'];
     
            include('../Controllers/dbconnection.class.php');
            include('../Controllers/questionsCont.class.php');
            include('../Views/questionsView.class.php');
            $ques = new questionView();
            $data = $_POST['array'];
            print_r($data);
        
// in case the question is choice:
            if($data['questionType'] == "choose")
            {
               
                echo $type = "choice";
                echo $question = $data['question'];
                echo $ans1 =  $data['a'];
                echo $ans2 =  $data['b'];
                echo $ans3 =  $data['c'];
                echo $ans4 =  $data['d'];

                echo $correct =  $data['correct'];
                echo $difficulty =  $data['difficulty'];
                echo $mark = $data['mark'];
              
                if($ques->repeatedQuestion($question) == true)
                {
                    $ques->addQuestion($chapter_id, $question, $difficulty, $type,$mark);

                    $array = array($ans1, $ans2, $ans3, $ans4);
                    foreach($array as $answers)
                    {       
                    
                        $ques->addAnswer($question,$answers);
                    
                    }
                    if($correct == "a")
                    {
                        echo $correctAns =  $ans1;
                    }
                    else if($correct == "b"){
                        echo $correctAns = $ans2;
                    }
                    else if($correct == "c"){
                        echo $correctAns = $ans3;
                    }
                    else{
                        $correctAns= $ans4;
                    }
                    $ques->correctAnswer($correctAns,$question );
                }
                else{
                    echo "failed1";
                   // header('location:../Home/add-questions.php?existed_question&ch_id=' . $chapter_id);
                }
            }
// in case the question is true and false            
            if($data['questionType'] == "true&false")
            {
               
                echo $type = "true&false";
                echo $question = $data['question'];
                echo $ans1 =  $data['a'];
                echo $ans2 =  $data['b'];
                echo $correct =  $data['correct'];
                echo $difficulty =  $data['difficulty'];
                echo $mark = $data['mark'];

                if($ques->repeatedQuestion($question) == true)
                {
                    $ques->addQuestion($chapter_id, $question, $difficulty, $type,$mark);

                $array = array($ans1, $ans2);
                foreach($array as $answers)
                {       
                   
                    $ques->addAnswer($question,$answers);
                   
                }
              
                if($correct == "a")
                {
                    echo $correctAns =  $ans1;
                }
                else{
                    echo $correctAns = $ans2;
                }
                $ques->correctAnswer($correctAns,$question );
                }
                else{
                    echo "failed2";
                }
            }

           
         //   echo "done";
         //   header('../Home/question-bank.php');


    }
    else
    {
        echo "adding failed";
    }

