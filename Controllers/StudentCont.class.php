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
        $query = "select exams.id, exams.exam_name, exams.end_time, exams.start_time, exams.exam_date, exams.total_mark from exams join subjects 
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
                    exams.id, exams.exam_name, exams.exam_date, exams.start_time, exams.end_time, exams.total_mark
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

    // the part of showing exams

    /// first/ get exam structure 
    protected function getExamName($exam_id)
    {
        $stmt = $this->Connection()->query("select exam_name from exams where id = $exam_id ");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function getExamMark($exam_id)
    {
        $stmt = $this->Connection()->query("select total_mark from exams where id = $exam_id ");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function getExamStructure($exam_id)
    {
        $stmt = $this->Connection()->query("select * from exam_structure where exam_id = $exam_id");
        $data = $stmt->fetchAll();
        return $data;
    }
    protected function chaptersStudCont($sub_id)
    {
        $stmt = $this->Connection()->query(
            "SELECT chapters.id, chapters.subject_id, chapters.chapter_name,
                     subjects.subject_name
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

    /// second get questions by using the strucure

    protected function getQuestions($type, $difficulty, $limit, $chapter_id)
    {
        $stmt = $this->Connection()->query("SELECT distinct questions.question_text , questions.id from questions inner join exam_structure
         on exam_structure.chapter_id = questions.chapter_id  where exam_structure.chapter_id = $chapter_id and questions.type = '$type'
         and questions.difficulty = '$difficulty' ORDER BY RAND() limit $limit ");
        $data = $stmt->fetchAll();
        return $data;
    }
    // third: get question answers
    protected function getAnswers($question_id)
    {
        $stmt = $this->Connection()->query("select * from answers where question_id = $question_id ORDER BY RAND()");
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
        $stmt = $this->Connection()->query("select * from questions where chapter_id = $chapter_id ");
        $data = $stmt->fetchAll();
        return $data;
    }

    protected function addstudentAnswers($student_id, $exam_id, $question_id, $answer_id)
    {
        
        $stmt = $this->Connection()->prepare("INSERT into student_answers(student_id, exam_id, question_id, answer_id) values (?,?,?,?)");
      
        $stmt->execute(array($student_id, $exam_id, $question_id, $answer_id));
    }
    protected function addResultCont($student_id,$exam_id)
    {
        $query = "SELECT * from student_answers join answers on 
        student_answers.answer_id = answers.id where student_answers.exam_id = $exam_id and student_answers.student_id = $student_id and answers.is_correct =1 ";
        $stmt = $this->Connection()->query($query);
        $result =  $stmt->rowCount();
        $total = 2* $result;
        $stmt2 = $this->Connection()->prepare("INSERT into results(student_id, exam_id, result) values (?,?,?)");
        $stmt2->execute(array($student_id , $exam_id , $total));
    }

    protected function checktakenExams($exam_id, $student_id)
    {
        $stmt = $this->Connection()->query("select * from results where exam_id = $exam_id and student_id = $student_id");
        
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of errors  
        {
           
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    // student result 
    protected function getResult($exam_id, $student_id)
    {
        $stmt = $this->Connection()->query("select result from results where exam_id = $exam_id  and student_id = $student_id");
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


    // the part of setting  --->  student
    protected function getStudDetails()
    {
        $stmt = $this->Connection()->query("select * from students where id = " .$_SESSION['id']);
        $data = $stmt->fetchAll();
        return $data;
    } 

    protected function editStudDetailsCont($user_name, $academic_id, $email, $password, $level, $department, $stud_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE students SET user_name = ?, academic_id = ?, email = ?, password = ?, level = ?, department = ?, level_id = (SELECT id from levels where level_name = '$level'), dept_id =  (SELECT id from departments where dept_name = '$department' ) WHERE id = ? ");
        $stmt->execute(array($user_name, $academic_id, $email, $password, $level, $department, $stud_id));
    }

    protected function uploadImageCont($image, $stud_id)
    {
        $stmt = $this->Connection()->prepare("UPDATE students SET image = ? WHERE id = ?");
        $stmt->execute(array($image, $stud_id));
    }



}