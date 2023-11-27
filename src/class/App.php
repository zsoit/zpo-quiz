<?php

class App
{
    private $question;

    public function __construct()
    {
        $this->question = new Question();

    }

    protected function Index()
    {
        HtmlTemplate::PrimaryHeader("QUIZ - ZPO");
        HtmlTemplate::Info();

    }

    protected function Page404()
    {
        HtmlTemplate::PrimaryHeader("404 - nie znaleziono strony");

    }

    protected function RandomQuestion()
    {
        HtmlTemplate::PrimaryHeader("WYLOSOWANE PYTANIE");
        $random_question = $this->question->getRandomQuetion();
        Views::DisplayQuestion($random_question);
    }


    protected function Exam10()
    {


        HtmlTemplate::PrimaryHeader("TEST 10 PYTAŃ");
        for ($i = 0; $i < 10; $i++) {
            $random_question = $this->question->getRandomQuetion();
            Views::DisplayQuestionFromExam10($random_question);
        }
        HtmlTemplate::checkButton();
        HtmlTemplate::scoreCount();
    }


    protected function AddForm()
    {
        HtmlTemplate::PrimaryHeader("Dodaj pytanie: ");
        HtmlTemplate::AddForm("index.php?action=add");
    }

    protected function Add()
    {
        $title = DataController::fetchPOST("q_text");
        $this->question->AddQuestion();
        HtmlTemplate::PrimaryHeader("Dodano nowe pytanie! $title ");

    }

    protected function EditForm()
    {

        HtmlTemplate::PrimaryHeader("Edycja pytania");
        $sql = $this->question->getQuestionById();
        Views::DisplayEditForm($sql);

    }

    protected function Edit()
    {
        $id = DataController::fetchGET("id");
        $title = DataController::fetchPOST("q_text");
        HtmlTemplate::PrimaryHeader("Zaaktualizowano pytanie <h4>#$id - $title</h4>");
        $this->question->EditQuestion();

    }

    protected function Delete()
    {
        $id = DataController::fetchGET("id");
        $this->question->DeleteQuestion();
        HtmlTemplate::PrimaryHeader("Usunięto pytanie! <h4>Pytanie #$id</h4> ");
    }


    protected function List()
    {
        HtmlTemplate::PrimaryHeader("Lista pytań: ");
        $res = $this->question->getAllQuestion();
        Views::DisplayAllQue($res);

    }


}