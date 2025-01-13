<?php
require_once("./includes/startTemplate.inc.php");
require_once("Darlehensrechner.php");
require_once ("./klassen/TCPDF/tcpdf.php");

// Benutzereingaben validieren und verarbeiten
$eigenkapital = isset($_POST["eigenkapital"]);
$immopreis = isset($_POST["immopreis"]);
$pdf = isset($_POST["pdf"]);

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

        if ($pdf)
        {
            $pdf=new setasign\Fpdi\Tcpdf\Fpdi();
            $pdf->SetFont('Helvetica', "", 10);
            $pagecount=$pdf->setSourceFile('./pdfVorlagen/produktFlyer.pdf');
            $pdfTemplate=$pdf->ImportPage(1);
            $pdf->addPage();
            $pdf->useTemplate($pdfTemplate);
            $pdf->SetXY($xTextStart, 30);
            $pdf->Cell(16, 3, $heute);
            $pdf->SetXY($xTextStart, 100);
            $pdf->MultiCell(0, 20, $einleitungstext);
            $pdf->SetXY($xTextStart, 110);
            $pdf->Cell(4, 20, $produkt1);
            $pdf->SetXY($xTextStart, 119);
            $pdf->Cell(4, 20, $produkt2);
            $pdf->SetXY($xTextStart, 124);
            $pdf->Cell(4, 20, $produkt3);
            $pdf->Output();
        }
        $smarty->assign ( 'ausgabeText', htmlentities($ausgabeText));
        $smarty->assign ( 'ausgabeText2', htmlentities($ausgabeText2));
    }
} else {
    $smarty->assign("error", "Bitte geben Sie gültige Werte für Eigenkapital und Immobilienpreis ein.");
}

$smarty->display('uebung9_2.tpl');
