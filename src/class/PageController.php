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

            case 'account':
                echo "Konto";
                break;

            case "add_user":
                $this->Adduser();
                break;

            case "login":
                $this->Login();
                break;

            case "login_form":
                $this->LoginForm();
                break;

            case "add_user_form":
                $this->AddUserForm();
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