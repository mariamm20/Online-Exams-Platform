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

    protected function deleteChapterCont($chapter_id)
    {
        $stmt = $this->Connection()->prepare("delete from chapters where id = ?");
        $stmt->execute(array($chapter_id));
    }

    protected function editChapterCont($chapter_name, $chapter_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE chapters SET chapter_name = ? WHERE id = ? ");
        $stmt->execute(array($chapter_name, $chapter_id));
    }
    //the part of professor profile
    protected function getExamsCont($prof_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT COUNT(*)
            FROM exams 
            INNER JOIN subjects ON exams.subject_id = subjects.id 
            INNER JOIN professor_subjects ON subjects.id = professor_subjects.subject_id 
            WHERE prof_id = " . $prof_id
        );
        $count = $stmt->fetchColumn();
        echo $count;
    }

    protected function getNotificationCont($prof_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT exams.exam_name, subjects.subject_name, exams.id
            FROM exams 
            INNER JOIN subjects ON exams.subject_id = subjects.id 
            INNER JOIN professor_subjects ON subjects.id = professor_subjects.subject_id 
            WHERE prof_id = " . $prof_id
        );
        $data = $stmt->fetchAll();
        return $data;
    }


    //the part of results history
    protected function examsCont($sub_id)
    {
        $stmt = $this->Connection()->query("SELECT * FROM exams WHERE subject_id =" . $sub_id);
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
            WHERE results.exam_id =" . $exam_id . " AND professor_subjects.prof_id = " . $_SESSION['id']
        );
        $data = $stmt->fetchAll();
        return $data;
    }

    //all exams
    protected function getAllExamsCont($prof_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT DISTINCT exams.exam_name, exams.id, exams.exam_date, exams.start_time, exams.duration,
                    subjects.subject_name
            FROM exams 
            INNER JOIN subjects ON exams.subject_id = subjects.id 
            INNER JOIN professor_subjects ON subjects.id = professor_subjects.subject_id 
            WHERE prof_id = " . $prof_id
        );
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function editAllExamsCont($exam_name, $exam_date, $exam_duration, $start_time, $exam_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE exams SET exam_name = ?, exam_date = ?, duration = ?, start_time = ? WHERE id = ? ");
        $stmt->execute(array($exam_name, $exam_date, $exam_duration, $start_time, $exam_id));
    }


    //question bank
    protected function getChaptersContr($chapter_id)
    {
        $stmt = $this->Connection()->query("select * from chapters where id = " . $chapter_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getQuestionsNumbers($chapter_id)
    {
        $sql = "SELECT COUNT(*) FROM questions where chapter_id = " . $chapter_id;
        $stmt = $this->Connection()->query($sql);
        $count = $stmt->fetchColumn();
        echo $count;
    }

    protected function showQuestionsContr($chapter_id)
    {
        $stmt = $this->Connection()->query("select distinct * from questions where chapter_id = $chapter_id ");
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getQuestionsContr($question_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT  questions.id, questions.question_text, questions.chapter_id, questions.difficulty, questions.type,
                    answers.answer, answers.is_correct, answers.question_id
            FROM answers
            INNER JOIN questions ON answers.question_id = questions.id
            WHERE questions.id =" . $question_id
        );
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function deleteQuestionContr($question_id)
    {
        $stmt = $this->Connection()->prepare("delete from questions where id = ?");
        $stmt->execute(array($question_id));
    }

    // the part of edit questions
    protected function getQuestionToEdit($question_id)
    {
        $stmt = $this->Connection()->query("SELECT * FROM questions WHERE questions.id = " . $question_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getAnswersToEdit($question_id)
    {
        $stmt = $this->Connection()->query("SELECT * FROM answers WHERE question_id = " . $question_id);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function editQuestionsContr($question_text, $difficulty, $mark, $question_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE questions SET question_text = ?, difficulty = ?, mark = ? WHERE id = ? ");
        $stmt2 = $this->Connection()->prepare("UPDATE answers set is_correct = 0 where question_id = ?  ");
        $stmt->execute(array($question_text, $difficulty, $mark, $question_id));
        $stmt2->execute(array($question_id));
    }

    protected function editAnswersContr($answer, $answer_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE answers SET answer = ? WHERE id = ? ");
        $stmt->execute(array($answer, $answer_id));
    }

    protected function editCorrectAnswerCont($answer_id)
    {
        $stmt =  $this->Connection()->prepare("update answers set is_correct = 1 where id = ?");
        $stmt->execute(array($answer_id));
    }

    // the part of setting  --->  professor
    protected function getProfDetails()
    {
        $stmt = $this->Connection()->query("select * from professors where id = " . $_SESSION['id']);
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function getProf($prof_id)
    {
        $stmt = $this->Connection()->query("select * from professors where id = " . $prof_id);
        $data = $stmt->fetch();
        return $data;
    }

    protected function editProfDetailsCont($user_name, $academic_id, $email, $password, $prof_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE professors SET user_name = ?, academic_id = ?, email = ?, password = ? WHERE id = ? ");
        $stmt->execute(array($user_name, $academic_id, $email, $password, $prof_id));
        
    }
    protected function editProfDetailsControll($user_name, $academic_id, $email,$prof_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE professors SET user_name = ?, academic_id = ?, email = ? WHERE id = ? ");
        $stmt->execute(array($user_name, $academic_id, $email, $prof_id));
        
    }

    protected function uploadImageCont($image, $prof_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE professors SET image = ? WHERE id = ?");
        $stmt->execute(array($image, $prof_id));
    }
    // empty exams
    protected function emptyExamCont($exam_id)
    {
        $sql = "SELECT * from exam_structure where num_of_questions > 0 and exam_id = ?";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute(array($exam_id));
        $resultCheck = false;
        if ($stmt->rowCount() == 0) // number of errors  
        {

            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
    protected function deleteexam($exam_id)
    {
        $stmt = $this->Connection()->prepare("DELETE  from exams where id = ?");
        $stmt->execute(array($exam_id));
    }
}
