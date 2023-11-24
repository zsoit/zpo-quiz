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
                echo "Test 10 pytan - do zrobienia";
                break;

            case 'account':
                echo "Konto";
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