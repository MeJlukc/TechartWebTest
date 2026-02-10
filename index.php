<?php
require 'config/db.php';
require 'controllers/NewsController.php';

$controller = new NewsController($db);

if ($_GET['id']) {
    $controller -> news($_GET['id']);
} else {
    $controller -> main();
}

?>