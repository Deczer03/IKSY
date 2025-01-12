<?php
    //euro1.php
    require_once("./includes/startTemplate.inc.php");

    $eigenkapital = $_POST["eigenkapital"];
    $immopreis = $_POST["immopreis"];
    $zinssatz = .05;
    $tilgung = .01;
    
    $kreditbetrag = $immopreis - $eigenkapital;
    $monatlicheBelastung = $kreditbetrag * (($zinssatz+$tilgung)/12);
    
    $smarty->assign("eigenkapital", number_format($eigenkapital, 2));
    $smarty->assign("immopreis", number_format($immopreis,2));
    $smarty->assign("monatlicheBelastung", number_format($monatlicheBelastung, 2));

    $smarty->display('uebung7_1.tpl');