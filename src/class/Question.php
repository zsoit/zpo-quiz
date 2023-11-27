<?php

class Question
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    private function IdFetchArray(): array
    {
        $array = array();
        $sql = <<<SQL
            SELECT id FROM questions
        SQL;
        $result = $this->db->query($sql);
        while($row = $result->fetchArray())
        {
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

    public function getAllQuestion(){
        $sql = "SELECT question_text, id FROM questions";
        return $this->db->query($sql);
    }
}