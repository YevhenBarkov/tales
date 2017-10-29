<?php

namespace Src\Command;

use Src\DB\DBManager;

class ReadCommand extends Command
{

    public function execute()
    {
        $dbManager = new DBManager();
        $chapter = $dbManager->getChapterById($_GET['chapterId']);
        return $this->twig->render('read.html.twig',
            array('chapter' => $chapter));
    }
}