<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use src\UserManager;

$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__.'/log/app.log', Logger::DEBUG));

$logger->info('Démarage du logiciel');
$logger->debug('2ème message');

print("1) OK <br/>");

$loader = new FilesystemLoader('../templates');

print("2) OK <br/>");

$twig = new Environment($loader, ['cache'=>'../cache']);

print("3) OK <br/>");

echo $twig->render('base.html.twig',
[
    'title' => 'Liste des utilisateurs',
    'text'  => $manager->getAll(),
]);