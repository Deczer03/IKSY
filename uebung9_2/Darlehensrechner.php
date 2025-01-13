<?php

class Darlehensrechner {
    private $eigenkapital;
    private $immopreis;
    private $zinssatz;
    private $tilgung;

    public function __construct($eigenkapital, $immopreis) {
        $this->eigenkapital = $eigenkapital;
        $this->immopreis = $immopreis;
        $this->tilgung = 0.01; // Standardtilgung
        $this->zinssatz = 0.05; // Standardzinssatz
    }

    public function berechneEigenkapitalquote() {
        return $this->eigenkapital / $this->immopreis;
    }

    public function istEigenkapitalquoteZuNiedrig() {
        return $this->berechneEigenkapitalquote() < 0.3;
    }

    public function getZinssatz() {
        $quote = $this->berechneEigenkapitalquote();

        if ($quote >= 0.6) {
            $this->zinssatz = 0.04; // Zinssatz für 60% oder mehr Eigenkapitalquote
        } elseif ($quote >= 0.5) {
            $this->zinssatz = 0.045; // Zinssatz für 50% bis unter 60% Eigenkapitalquote
        }

        return $this->zinssatz;
    }

    public function berechneMonatlicheBelastung() {
        $kreditbetrag = $this->immopreis - $this->eigenkapital;
        $zinssatz = $this->getZinssatz();
        return $kreditbetrag * (($zinssatz + $this->tilgung) / 12);
    }
}
