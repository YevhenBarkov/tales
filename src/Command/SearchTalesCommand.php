<?php

namespace Src\Command;

use Twig_Environment;

class asdad extends Command
{


    public function execute()
    {
        if ($_SESSION['user']) {
            session_reset();
        }
        echo $this->twig->render('home.html.twig', array('massage' => "Bye!"));
    }
}