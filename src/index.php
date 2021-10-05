<?php ///  php -S localhost:8000 -t src
require_once '../vendor/autoload.php';

use App\UserManager;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__ . '/log/app.log', Logger::DEBUG));

$logger->info('Démarage du logiciel');
$logger->debug('2ème message');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

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
            'title' => "Titre de ma page très géniale",
        ]
    );
} catch (Exception $e) {
    print("Une erreur est intervenue : '" . $e->getMessage() . "'");
}
