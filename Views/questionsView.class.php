<?php
class questionView extends questionCont
{
    public function repeatedQuestion($question)
    {
        if($this->repeatedQuesCont($question) == true)
        {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function addQuestion($chapter_id,$question, $difficulty, $type,$mark)
    {
        $this->addQuestionCont($chapter_id, $question, $difficulty, $type,$mark);
    }

    public function addAnswer($ques_name, $answer)
    {
        $this->addAnswersCont($ques_name, $answer);
    }
    public function correctAnswer($answer,$ques_id)
    {
        $this->correctAnsCont( $answer,$ques_id);
    }
}