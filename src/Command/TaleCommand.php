<?php

namespace Src\Command;

use Src\DB\DBManager;

class TaleCommand extends Command
{

    public function execute()
    {
        $dbManager = new DBManager();
        $tale = $dbManager->getTaleById($_GET['id']);
        $chapters = $dbManager->getChaptersByTaleId($_GET['id']);
        return $this->twig->render('tale.html.twig',
            array(
                'tale' => $tale,
                'chapters' => $chapters));
    }
}