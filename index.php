<?php
require_once __DIR__ . '/config.inc.php';
require_once __DIR__ . '/vendor/autoload.php';
session_start();
$_SESSION['authorized'] = 0;
if ($_SESSION['authorized'] !== 1) {
    $controller = 'login';
    $action = 'login';
}
else if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else {
    $controller = 'main';
    $action = 'home';
}
require_once ('views/layout.php');
?>
