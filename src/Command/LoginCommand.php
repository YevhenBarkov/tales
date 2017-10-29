<?php

namespace Src\Command;

use Src\DB\DBManager;

class LoginCommand extends Command
{

    public function execute()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return $this->twig->render('login.html.twig', array('massage' => "Hi, sign in!"));
        }

        $dbManager = new DBManager();
        $usr = $dbManager->getUserByLogin($_POST["login"]);
        if ($usr) {
            if ($usr->getPassword() == $_POST['password']) {
                $_SESSION['user'] = $usr;
                $this->twig->addGlobal('session', $_SESSION);
                return $this->twig->render('home.html.twig', array('massage' => "Welcome back!" . $usr->getLogin()));
            } else {
                return "WRONG PASSWORD!";
            }
        }
    }
}