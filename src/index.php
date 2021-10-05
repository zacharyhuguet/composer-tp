<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Twig\Environment;
use App\UserManager;
use Twig\Loader\FilesystemLoader;
use Monolog\Handler\StreamHandler;

$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__.'/log/app.log', Logger::DEBUG));

$logger->info('Démarage du logiciel');
$logger->debug('2ème message');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache'=>'../cache']);

include 'conf.php';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $userManager = new UserManager($db);

    $users = $userManager->getAll();

    echo $twig->render(
        'user/index.html.twig',
        [
            'users' => $users,
            'title' => "Titre de ma page très géniale"
        ]
        );
} catch (Exception $e) {
    print($e->getMessage());
}
