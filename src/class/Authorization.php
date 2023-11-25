<?php
class Authorization
{
    public function __construct() {
        session_start();
        $this->cssDlaNiezalogowanych();
    }


    public function SprawdzCzyZalogowano(): void
    {
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: /zaloguj');
            exit();
        }
    }

    public function SprobojZalogowac(): void
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {

            $uzytkownik= $this->login;
            $haslo= $this->haslo;

            if (isset($_POST['uzytkownik']) && isset($_POST['haslo']))
            {
                if($_POST['uzytkownik'] === $uzytkownik && $_POST['haslo'] === $haslo)
                {

                    $_SESSION['logged_in'] = true;
                    header('Location: /');
                    exit();

                }
            }
        }

    }

    public function Logout()
    {
        unset($_SESSION['logged_in']);
        header('Location: /index.php?action=login_form');
        exit();
    }


}