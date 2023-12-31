<?php

class Database
{
    private $db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        $this->db = new \SQLite3(DATABASE);

        if (!$this->db) {
            die("<h1>Nie można połączyć się z bazą danych.<h1>");
        }
    }

    public function disconnect() {
            $this->db->close();
    }

    public function escapeString($string): string
    {
        return $this->db->escapeString($string);
    }

    public function query($sql) {
        $escape_sql= $this->escapeString($sql);
        $result = $this->db->query($escape_sql);

        if (!$result) {
            die("Błąd zapytania: " . $this->db->lastErrorMsg());
        }

        return $result;
    }
}
