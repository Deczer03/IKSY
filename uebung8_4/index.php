<?php
//euro1.php
require_once("./includes/startTemplate.inc.php");

$eigenkapital = $_POST["eigenkapital"];
$immopreis = $_POST["immopreis"];
$zinssatz = .05;
$tilgung = .01;

if($eigenkapital < ($immopreis*.3)) {
    $unterdreissigprozent = true;
    $smarty->assign("unterdreissigprozent", $unterdreissigprozent);

} else if ($eigenkapital == ($immopreis*.6)) {
    $sechzigprozent = true;
    $zinssatz = 0.4;
    $kreditbetrag = $immopreis - $eigenkapital;
    $monatlicheBelastung = $kreditbetrag * (($zinssatz + $tilgung) / 12);
    $smarty->assign("sechzigprozent", $sechzigprozent);
    $smarty->assign("eigenkapital", number_format($eigenkapital, 2));
    $smarty->assign("immopreis", number_format($immopreis, 2));
    $smarty->assign("monatlicheBelastung", number_format($monatlicheBelastung, 2));
} else if ($eigenkapital == ($immopreis*.5)) {
    $fuenfzigprozent = true;
    $zinssatz = 0.45;
    $kreditbetrag = $immopreis - $eigenkapital;
    $monatlicheBelastung = $kreditbetrag * (($zinssatz + $tilgung) / 12);
    $smarty->assign("fuenfzigprozent", $fuenfzigprozent);
    $smarty->assign("eigenkapital", number_format($eigenkapital, 2));
    $smarty->assign("immopreis", number_format($immopreis, 2));
    $smarty->assign("monatlicheBelastung", number_format($monatlicheBelastung, 2));
} else {
    $kreditbetrag = $immopreis - $eigenkapital;
    $monatlicheBelastung = $kreditbetrag * (($zinssatz+$tilgung)/12);
    $smarty->assign("eigenkapital", number_format($eigenkapital, 2));
    $smarty->assign("immopreis", number_format($immopreis,2));
    $smarty->assign("monatlicheBelastung", number_format($monatlicheBelastung, 2));
}



$smarty->display('uebung8_4.tpl');
