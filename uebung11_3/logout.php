<?php
require_once 'klassen/smarty/libs/Smarty.class.php';
session_start();
session_destroy();

$smarty = new Smarty();
$smarty->display('logout.tpl');
?>
