<?php
require_once("./includes/startTemplate.inc.php");
require_once("Darlehensrechner.php"); // Klasse einbinden

// Benutzereingaben validieren und verarbeiten
$eigenkapital = isset($_POST["eigenkapital"]) ? (float)$_POST["eigenkapital"] : 0;
$immopreis = isset($_POST["immopreis"]) ? (float)$_POST["immopreis"] : 0;

if ($eigenkapital > 0 && $immopreis > 0) {
    // Instanz von Darlehensrechner erstellen
    $rechner = new Darlehensrechner($eigenkapital, $immopreis);

    if ($rechner->istEigenkapitalquoteZuNiedrig()) {
        $smarty->assign("error", "Die Eigenkapitalquote ist zu gering, um die Immobilie zu finanzieren!");
    } else {
        $monatlicheBelastung = $rechner->berechneMonatlicheBelastung();
        $zinssatz = $rechner->getZinssatz();

        $smarty->assign("immopreis", number_format($immopreis, 2));
        $smarty->assign("eigenkapital", number_format($eigenkapital, 2));
        $smarty->assign("zinssatz", $zinssatz * 100);
        $smarty->assign("monatlicheBelastung", number_format($monatlicheBelastung, 2));
    }
} else {
    $smarty->assign("error", "Bitte geben Sie gültige Werte für Eigenkapital und Immobilienpreis ein.");
}

$smarty->display('uebung9_2.tpl');
