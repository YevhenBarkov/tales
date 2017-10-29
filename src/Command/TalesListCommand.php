<?php

namespace Src\Command;

use Src\DB\DBManager;

class TalesListCommand extends Command
{
    public function execute()
    {
        $manager = new DBManager();
        $tales= $manager->getAllTales();
        return $this->twig->render('talesList.html.twig', array('tales'=>$tales));
    }
}