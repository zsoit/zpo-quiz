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

    public function AddUser(){

        $hashedPassword = md5($this->pass);

        $sql = "INSERT INTO users VALUES (null,'{$this->login}','$hashedPassword')";

        $this->db->query($sql);

        echo "Dodano! {$this->login}";
    }

    public function checkIsLogin()
    {
            if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
                header('Location: /zaloguj');

            }
    }
    public function Auth(){

        $sql = " SELECT login, password FROM users WHERE login='{$this->login}'";

        $res = $this->db->query($sql);



        while($row = $res->fetchArray())
        {
            if (md5($this->pass) == $row["password"] AND $this->login == $row["login"]) {
                return true;
            }
        }

    }

    public function  TryLogin(){
        if($this->Auth()){
            echo "Zalogowano!";
        }
        else{
            header("refresh:0;url=index.php?action=login_form");
        }
    }
}