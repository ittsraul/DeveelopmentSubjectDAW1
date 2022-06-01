<?php

class discoDuro1 extends Componente{
    private $tipo;
    private $capacidadGb;
    private $velTransmision;
    private $tipoConexion;

    public function __construct( $tipo, $capacidadGb, $velTransmision, $tipoConexion) {
        $this->tipo = $tipo;
        $this->capacidadGb = $capacidadGb;
        $this->velTransmision = $velTransmision;
        $this->tipoConexion = $tipoConexion;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCapacidadGb() {
        return $this->capacidadGb;
    }

    public function getVelTransmision() {
        return $this->velTransmision;
    }

    public function getTipoConexion() {
        return $this->tipoConexion;
    }
}