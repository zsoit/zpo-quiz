<?php

class PageController extends App
{
    public function Start()
    {
        $page = DataController::fetchGET('action');

        switch ($page) {
            case 'home':
                $this->Index();
                break;

            case 'single':
                $this->RandomQuestion();
                break;

            case 'exam10':
                $this->Exam10();
                break;

            case "add_form":
                $this->AddForm();
                break;

            case "add":
                $this->Add();
                break;

            case "edit_form":
                $this->EditForm();
                break;

            case "edit":
                $this->Edit();
                break;

            case "delete":
                $this->Delete();
                break;

            case "list":
                $this->List();
                break;

            default:
                $this->Page404();
                break;
        }

    }

    public function include_html($file)
    {
        include_once "./src/public/$file.php";
    }
}