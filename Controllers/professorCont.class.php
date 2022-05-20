<?php
class professorCont extends DB
{
    protected function subjectsCont()
    {
        $stmt = $this->Connection()->query("
        SELECT DISTINCT subjects.* from subjects
        join professor_subjects on subjects.id = professor_subjects.subject_id 
        join professors on professor_subjects.prof_id = " . $_SESSION['id']);
        $s_data = $stmt->fetchAll();
        return $s_data;
    }

    protected function chaptersCont($sub_id)
    {
        
        $stmt = $this->Connection()->query("select * from chapters where subject_id =" .  $sub_id);
        $ch_data = $stmt->fetchAll();
        return $ch_data;

    }
    
    protected function addChapterCont($sub_id, $chapter_name)
    {
        $stmt = $this->Connection()->prepare("insert into chapters (subject_id, chapter_name) values (?, ?)");
        $stmt->execute(array($sub_id, $chapter_name));
    }


    //the part of results history
    protected function examsCont($sub_id)
    {
        $stmt = $this->Connection()->query("SELECT * FROM exams WHERE subject_id =" .$sub_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getResultSheet($exam_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT results.id, results.student_id, results.exam_id, results.result, 
                    students.user_name, students.academic_id, students.level_id, students.dept_id, students.level, students.department,
                    subjects.id, subjects.level_id, subjects.dept_id,
                    exams.subject_id, exams.total_mark
            FROM results
            INNER JOIN students ON results.student_id = students.id
            INNER JOIN exams ON results.exam_id = exams.id
            INNER JOIN subjects ON exams.subject_id = subjects.id AND students.dept_id = subjects.dept_id AND students.level_id = subjects.level_id
            INNER JOIN professor_subjects ON subjects.id = professor_subjects.subject_id 
            WHERE results.exam_id =" .$exam_id." AND professor_subjects.prof_id = ".$_SESSION['id'] 
        );
        $data = $stmt->fetchAll();
        return $data;
    }

     //question bank
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

    protected function getQuestionToEdit($question_id)
    {
        $stmt = $this->Connection()->query("select * from questions where id = " .$question_id);
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

    protected function editQuestionsContr($question_text, $difficulty, $question_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE questions SET question_text = ?, difficulty = ? WHERE id = ? ");
        $stmt->execute(array($question_text, $difficulty, $question_id));
        
    }

    protected function editAnswersContr($answer, $is_correct, $question_id)
    {
            $stmt = $this->Connection()->prepare("UPDATE answrers SET answer = ?, is_correct = ? WHERE id = ? ");
            $stmt->execute(array($answer, $is_correct, $question_id));
    
    }


    // the part of setting  --->  professor
    protected function getProfDetails()
    {
        $stmt = $this->Connection()->query("select * from professors where id = " .$_SESSION['id']);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function editProfDetailsCont($user_name, $academic_id, $email, $password, $prof_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE professors SET user_name = ?, academic_id = ?, email = ?, password = ? WHERE id = ? ");
        $stmt->execute(array($user_name, $academic_id, $email, $password, $prof_id));
    }

    protected function uploadImageCont($image, $prof_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE professors SET image = ? WHERE id = ?");
        $stmt->execute(array($image, $prof_id));
    }
    
}

