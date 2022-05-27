<?php
class questionCont extends DB
{
    protected function addQuestionCont($chapter_id, $question, $difficulty, $type,$mark)
    {
       

        $stmt = $this->Connection()->prepare("insert into questions(chapter_id, question_text, difficulty, type,mark, created_at) values (?, ?, ?, ?,?, now())");
        $stmt->execute(array( $chapter_id,$question, $difficulty, $type,$mark ));
    }
    protected function addAnswersCont($ques_name, $answer)
    {
        $stmt = $this->Connection()->prepare("insert into answers(question_id, answer) values ((SELECT id from questions where question_text =?), ?)");
        $stmt->execute(array( $ques_name, $answer));
        
        // if($stmt->rowCount() == 1) // number of errors  
        // {
           
        //     $stmt->execute(array( $ques_name, $answer));
        
        // }
        // else{
        //     header('location: ../Home/professor.php');
        // }
       

    }
    protected function correctAnsCont($answer,$ques_id)
    {
        $stmt =  $this->Connection()->prepare("update answers set is_correct = 1 where answer = ? and question_id = (select id from questions where question_text = ?) ");
        $stmt->execute(array($answer, $ques_id ));
    }
}