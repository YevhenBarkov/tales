<?php

namespace Src\Command;

use Src\DB\DBManager;
use Src\Entity\User;

class RegCommand extends Command
{
    public function execute()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $manager = new DBManager();

            $usr = $manager->getUserByLogin($_POST["login"]);
            if ($usr) {
                return $this->twig->render('reg.html.twig',
                    array('massage' => "Sorry, already exist user with the same login."));
            }
            $usr = $manager->getUserByEmail($_POST["email"]);
            if ($usr) {
                return $this->twig->render('reg.html.twig',
                    array('massage' => "Sorry, already exist user with the same email, check it pls."));
            }
            if ($_POST['password'] != $_POST['passwordConf']) {
                return $this->twig->render('reg.html.twig',
                    array('massage' => "Oops, password and password confirm does not match."));
            }
            $usr = new User();
            $usr->setLogin($_POST["login"]);
            $usr->setPassword($_POST["password"]);
            $usr->setEmail($_POST["email"]);
            $usr->setUserType(2);//hmmm

            $manager->insertUser($usr);

            return $this->twig->render('login.html.twig', array('massage' => "Login in system!"));
        }
        return $this->twig->render('reg.html.twig', array('massage' => "Welcome to the hell!"));
    }
}