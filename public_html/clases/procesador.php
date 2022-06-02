<?php

class procesador extends Componente{
    private $velReloj;
    private $nucleosCPU;
    private $tpoMemo;
    private $tpoSocket;


    public function __construct($velReloj, $nucleosCPU, $tpoMemo, $tpoSocket) {
        $this->velReloj = $velReloj;
        $this->nucleosCPU = $nucleosCPU;
        $this->tpoMemo = $tpoMemo;
        $this->tpoSocket = $tpoSocket;
    }

    public function getVelReloj() {
        return $this->velReloj;
    }

    public function getNucleosCPU() {
        return $this->nucleosCPU;
    }

    public function getTpoMemo() {
        return $this->tpoMemo;
    }

    public function getTpoSocket() {
        return $this->tpoSocket;
    }

}