<?php
class questionView extends questionCont
{
    public function addQuestion($chapter_id,$question, $difficulty, $type)
    {
        $this->addQuestionCont($chapter_id, $question, $difficulty, $type);
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