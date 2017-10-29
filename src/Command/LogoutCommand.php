<?php

namespace Src\Command;

class LogoutCommand extends Command
{
    public function execute()
    {
        if ($_SESSION['user']) {
            unset($_SESSION['user']);
            $this->twig->addGlobal('session', $_SESSION);
            return $this->twig->render('home.html.twig', array('massage' => "Bye!"));
        }
    }
}