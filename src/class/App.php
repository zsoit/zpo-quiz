<?php

class App
{
    public function __construct()
    {
        $this->question = new Question();
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

}
?>