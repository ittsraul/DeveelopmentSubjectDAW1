<?php
class caja extends Componente{
    private $tmño;
    private $nVentiladores;
    private $ventana;


    public function __construct($tmño, $nVentiladores, $ventana) {
        $this->tmño = $tmño;
        $this->nVentiladores = $nVentiladores;
        $this->ventana = $ventana;
    }

    public function getTmño() {
        return $this->tmño;
    }

    public function getNVentiladores() {
        return $this->nVentiladores;
    }

    public function getVentana() {
        return $this->ventana;
    }
}


