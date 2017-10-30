<?php

namespace Src\Command;


use Src\DB\DBManager;

class HomeCommand extends Command
{

    public function execute()
    {
        $dbmanager = new DBManager();
        $tags = $dbmanager->getAllTags();

        return $this->twig->render('home.html.twig',
            array(
                'massage'=>"All style colours just for test",
                "tags"=>$tags));
    }
}