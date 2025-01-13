<?php
require_once 'klassen/smarty/libs/Smarty.class.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

$smarty = new Smarty();
$smarty->assign('session_id', session_id());
$smarty->assign('username', $_SESSION['user']);
$smarty->display('dashboard.tpl');
?>
