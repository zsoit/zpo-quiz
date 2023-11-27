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
        for($i=0; $i<10; $i++){
            $random_question = $this->question->getRandomQuetion();
            Views::DisplayQuestionFromExam10($random_question);
        }
        HtmlTemplate::checkButton();
        HtmlTemplate::scoreCount();
    }


    public function AddForm(){
        HtmlTemplate::PrimaryHeader("Dodaj pytanie: ");
        HtmlTemplate::AddForm("index.php?action=add");
    }


    public function List(){
        HtmlTemplate::PrimaryHeader("Lista pytań: ");
        $res = $this->question->getAllQuestion();
        Views::DisplayAllQue($res);

    }



}
?>