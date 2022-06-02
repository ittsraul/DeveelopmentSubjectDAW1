<?php

class refrigeracion extends Componente{
    private $tmño;
    private $tipo;

    public function __construct( $tmño, $tipo) {
        $this->tmño = $tmño;
        $this->tipo = $tipo;
    }

    public function getTmño() {
        return $this->tmño;
    }

    public function getTipo() {
        return $this->tipo;
    }
}