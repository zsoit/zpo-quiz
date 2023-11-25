<?php

class App
{
    private $question;
    private $user;
//    private $auth;

    public function __construct()
    {
        $this->question = new Question();
        $this->user = new User();
//        $this->auth =

    }

    public function Index(){
        HtmlTemplate::PrimaryHeader("QUIZ - ZPO");
        HtmlTemplate::Info();


    }
    public function AllQue(){
        HtmlTemplate::PrimaryHeader("WYLOSOWANE PYTANIE");
        $random_question = $this->question->getRandomQuetion();
        Views::DisplayQuestion($random_question);
    }


    public function Exam10(){

        HtmlTemplate::PrimaryHeader("TEST 10 PYTAŃ");
        HtmlTemplate::scoreCount();
        for($i=0; $i<10; $i++){
            $random_question = $this->question->getRandomQuetion();
            Views::DisplayQuestionFromExam10($random_question);
        }
        HtmlTemplate::checkButton();
    }

    public function AddUser(){
        HtmlTemplate::PrimaryHeader("Dodanie");
        $this->user->AddUser();
    }

    public function AdduserForm(){
        HtmlTemplate::PrimaryHeader("DODAJ UŻYTKOWNIKA");
        HtmlTemplate::AdduserFrom("index.php?action=add_user");

    }

    public function LoginForm(){
        HtmlTemplate::PrimaryHeader("Logowanie");
        HtmlTemplate::LoginForm("index.php?action=login");
    }

    public function Login(){
        $this->user->TryLogin();

    }



}
?>