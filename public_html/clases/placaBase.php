<?php

class placaBase extends Componente{
    private $cantUsb;
    private $cantDsplayPort;
    private $tpoSocket;
    private $tpoMemo;
    private $cantHdmi;

    public function __construct($cantUsb, $cantDsplayPort, $tpoSocket, $tpoMemo, $cantHdmi) {
        $this->cantUsb = $cantUsb;
        $this->cantDsplayPort = $cantDsplayPort;
        $this->tpoSocket = $tpoSocket;
        $this->tpoMemo = $tpoMemo;
        $this->cantHdmi = $cantHdmi;
    }

    public function getCantUsb() {
        return $this->cantUsb;
    }

    public function getCantDsplayPort() {
        return $this->cantDsplayPort;
    }

    public function getTpoSocket() {
        return $this->tpoSocket;
    }

    public function getTpoMemo() {
        return $this->tpoMemo;
    }

    public function getCantHdmi() {
        return $this->cantHdmi;
    }
}
