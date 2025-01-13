<?php
require_once 'klassen/smarty/libs/Smarty.class.php';
session_start();

$smarty = new Smarty();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '12345678') {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        $smarty->assign('error', 'Ungültige Anmeldedaten.');
    }
}

$smarty->display('login.tpl');

