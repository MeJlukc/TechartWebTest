<?php
require __DIR__ . '/config/config.php';
require ROOT . '/config/db.php';
require ROOT . '/controllers/NewsController.php';

$controller = new NewsController($db);

if (isset($_GET['id'])) {
    $controller -> news($_GET['id']);
} else {
    $controller -> main();
}

?>