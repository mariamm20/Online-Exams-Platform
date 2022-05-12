<?php
class questionCont extends DB
{
    protected function addQuestionCont($chapter_id, $question, $difficulty, $type)
    {
       

        $stmt = $this->Connection()->prepare("insert into questions(chapter_id, question_text, difficulty, type) values (?, ?, ?, ?)");
        $stmt->execute(array( $chapter_id,$question, $difficulty, $type ));
    }
    protected function addAnswersCont($ques_name, $answer)
    {
        $stmt = $this->Connection()->prepare("insert into answers(question_id, answer) values ((SELECT id from questions where question_text =?), ?)");
        $stmt->execute(array( $ques_name, $answer));
    }
    protected function correctAnsCont($answer,$ques_id)
    {
        $stmt =  $this->Connection()->prepare("update answers set is_correct = 1 where answer = ? and question_id = (select id from questions where question_text = ?) ");
        $stmt->execute(array($answer, $ques_id ));
    }
}