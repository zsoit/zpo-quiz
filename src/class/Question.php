<?php

class Question
{

    private mixed $q_text, $a, $b, $c, $d, $correct;
    private $id_get, $id_post;
    private object $db;

    public function __construct()
    {
        $this->db = new Database();

    }

    public function getInfo(){
        $this->q_text = DataController::fetchPOST("q_text");
        $this->a = DataController::fetchPOST("a");
        $this->b = DataController::fetchPOST("b");
        $this->c = DataController::fetchPOST("c");
        $this->d = DataController::fetchPOST("d");
        $this->correct = DataController::fetchPOST("correct");
        $this->id_get = DataController::fetchGET("id");
        $this->id_post = DataController::fetchPOST("id");

    }

    public function __deconstruct()
    {
        $this->db->disconnect();
    }

    private function IdFetchArray(): array
    {
        $array = array();
        $sql = "SELECT id FROM questions";
        $result = $this->db->query($sql);
        while ($row = $result->fetchArray()) {
            $array[] = $row['id'];
        }
        return $array;
    }

    public function getRandomQuetion()
    {
        $random = DataController::randomNumerFromArray(
            $this->IdFetchArray()
        );
        $sql = "SELECT * FROM questions WHERE id=$random";
        return $this->db->query($sql);

    }

    public function getAllQuestion()
    {
        $sql = "SELECT question_text, id FROM questions ORDER BY id DESC";
        return $this->db->query($sql);
    }

    public function AddQuestion()
    {
        $this->getInfo();

        $sql = <<<SQL
        INSERT INTO questions
            (id, question_text, answer_a, answer_b, answer_c, answer_d, correct_answer) 
        VALUES
            (NULL, "{$this->q_text}", "A. {$this->a}", "B. {$this->b}", "C. {$this->c}", "D. {$this->d}", "{$this->correct}")
        SQL;
        $this->db->query($sql);

    }

    public function getQuestionById()
    {
        $this->getInfo();

        $sql = "SELECT * FROM questions WHERE id={$this->id_get}";
        return $this->db->query($sql);

    }

    public function EditQuestion()
    {
        $this->getInfo();

        $sql = <<<SQL
        UPDATE questions SET 
            question_text="{$this->q_text}", 
            answer_a="{$this->a}", 
            answer_b="{$this->b}", 
            answer_c="{$this->c}", 
            answer_d="{$this->d}", 
            correct_answer="{$this->correct}"
        WHERE id={$this->id_get}
        SQL;

       $this->db->query($sql);


    }

    public function DeleteQuestion()
    {
        $this->getInfo();
        $sql = "DELETE FROM questions WHERE id = {$this->id_get}";
        $this->db->query($sql);

    }
}