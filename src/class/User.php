<?php

class User
{
    private $db;

    private $login;
    private $pass;

    public function __construct()
    {
        $this->db = new Database();
        $this->login = DataController::fetchPOST("login");
        $this->pass = DataController::fetchPOST("password");


    }
}