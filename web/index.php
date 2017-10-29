<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Src\Command\HomeCommand;
use Src\Command\LoginCommand;
use Src\Command\ReadCommand;
use Src\Command\RegCommand;
use Src\Command\TaleCommand;
use Src\Command\TalesListCommand;
use Src\Command\LogoutCommand;
session_start();

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../app/Resources/templates');
$twig = new Twig_Environment($loader, array('cache' => __DIR__ . '/../var/cache',
    'auto_reload' => true));

$twig->addGlobal('session', $_SESSION);

$req = explode('?', $_SERVER["REQUEST_URI"]);
$commands = array(
    '/' => HomeCommand::class,
    '/reg' => RegCommand::class,
    '/login' => LoginCommand::class,
    '/logout' => LogoutCommand::class,
    '/talesList' => TalesListCommand::class,
    '/tale' => TaleCommand::class,
    '/read' => ReadCommand::class,
);

$command = $commands[$req[0]];
if ($command) {
    $com = new $command($twig);
    echo $com->execute();
}
