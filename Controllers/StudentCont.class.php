<?php

class studentCont extends DB
{
    protected function getLevels()
    {
        $stmt = $this->Connection()->query("select * from levels");
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getDept($level_name)
    {
        
        $stmt = $this->Connection()->query("select * from departments where level_id = (SELECT id from levels where level_name = '$level_name' ) " );
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getExams()
    {
        $query = "select * from exams join subjects 
        on exams.subject_id = subjects.id where subjects.level_id =" . $_SESSION['level_id'] .
        " and subjects.dept_id =" . $_SESSION['dept_id'];
        $stmt = $this->Connection()->query($query);
        $data = $stmt->fetchAll();
        return $data;
    }


    // the part of result history
    protected function getStudResultSheet()
    {
        $stmt = $this->Connection()->query(
            "SELECT results.id, results.student_id, results.exam_id, results.result, 
                    students.id, 
                    exams.id, exams.exam_name, exams.exam_date, exams.start_time, exams.duration, exams.total_mark
            FROM results
            INNER JOIN students ON results.student_id = students.id
            INNER JOIN exams ON results.exam_id = exams.id
            WHERE results.exam_id =exams.id AND students.id = ".$_SESSION['id']
        );
        $data = $stmt->fetchAll();
        return $data;
    }


    // the part of subjects
    protected function subjectsStudCont()
    {
        $stmt = $this->Connection()->query(
            "SELECT subjects.id, subjects.subject_name, subjects.level_id, subjects.dept_id,
                    students.level_id, students.dept_id
            FROM subjects
            INNER JOIN students ON subjects.level_id = students.level_id AND subjects.dept_id = students.dept_id
            WHERE students.id = ".$_SESSION['id']
        );
        $s_data = $stmt->fetchAll();
        return $s_data;
    }

    protected function chaptersStudCont($sub_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT chapters.id, chapters.subject_id, chapters.chapter_name,
                    subjects.id, subjects.subject_name
            FROM chapters
            INNER JOIN subjects ON chapters.subject_id = subjects.id
            WHERE chapters.subject_id = ".$sub_id
        );
        $ch_data = $stmt->fetchAll();
        return $ch_data;
    }

    // the part of question bank
    protected function getChaptersContr($chapter_id)
    {
        $stmt = $this->Connection()->query("select * from chapters where id = " .$chapter_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getQuestionsNumbers($chapter_id)
    {
        $sql = "SELECT COUNT(*) FROM questions where chapter_id = ".$chapter_id;
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }

    protected function getQuestionsContr($chapter_id)
    {
        $stmt = $this->Connection()->query("select * from questions where chapter_id =" .$chapter_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getEditedQuestionsContr($question_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT questions.id, questions.question_text, questions.chapter_id, questions.difficulty, questions.type,
                    answers.answer, answers.is_correct, answers.question_id
            FROM answers
            INNER JOIN questions ON answers.question_id = questions.id
            WHERE questions.id =" .$question_id
        );
        $data = $stmt->fetchAll();
        return $data;
    }

}