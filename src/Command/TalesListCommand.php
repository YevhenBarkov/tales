<?php

namespace Src\Command;

use Src\DB\DBManager;

class TalesListCommand extends Command
{
    public function execute()
    {
        $manager = new DBManager();
        $tags = $manager->getAllTags();
        $includeTags =$_GET['include'];
        $excludeTags =$_GET['exclude'];
        if($includeTags||$excludeTags){
            $tales =$manager->getTalesByTags($includeTags, $excludeTags);
        }else{
            $tales= $manager->getAllTales();
        }

        return $this->twig->render('talesList.html.twig',
            array(
                'tales'=>$tales,
                'tags'=>$tags));
    }
}