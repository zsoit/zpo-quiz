<?php

class PageController extends App
{
    public function Start()
    {
        $page = DataController::fetchGET('action');

        switch($page)
        {
            case 'single':
                $this->AllQue();
                break;

            case 'exam10':
                $this->Exam10();
                break;

            case "add_form":
                $this->AddForm();
                break;

            case "list":
                $this->List();
                break;

            default:
                $this->Index();
                break;
        }

    }

    public function include_html($file)
    {
        include_once "./src/public/$file.php";
    }
}