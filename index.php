<?php
define('ROOT', __DIR__);

require ROOT . '/config/db.php';
require ROOT . '/controllers/NewsController.php';

$controller = new NewsController($db);

if ($_GET['id']) {
    $controller -> news($_GET['id']);
} else {
    $controller -> main();
}

?>