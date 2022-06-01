<?php

class targetaGrafica extends Componente{
    private $tmñoMemo;
    private $numHdmi;
    private $tpoMemo;
    private $numDport;
 
    public function __construct( $tmñoMemo, $numHdmi, $tpoMemo, $numDport) {
        $this->tmñoMemo = $tmñoMemo;
        $this->numHdmi = $numHdmi;
        $this->tpoMemo = $tpoMemo;
        $this->numDport = $numDport;
    }

    public function getTmñoMemo() {
        return $this->tmñoMemo;
    }

    public function getNumHdmi() {
        return $this->numHdmi;
    }

    public function getTpoMemo() {
        return $this->tpoMemo;
    }

    public function getNumDport() {
        return $this->numDport;
    }
}
