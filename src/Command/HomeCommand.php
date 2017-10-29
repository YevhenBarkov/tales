<?php

namespace Src\Command;


class HomeCommand extends Command
{

    public function execute()
    {
        return $this->twig->render('home.html.twig',
            array('massage'=>"All style colours just for test"));
    }
}