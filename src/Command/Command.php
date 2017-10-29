<?php

namespace Src\Command;

use Twig_Environment;

abstract class Command
{
    /**
     * @var Twig_Environment;
     */
    protected $twig;

    function __construct($twig)
    {
        $this->twig = $twig;
    }

    abstract public function execute();
}