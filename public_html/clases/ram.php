<?php

class ram extends Componente{
    private $vMemo;
    private $tpoMemo;
    private $tmñoMemo;

    public function __construct($vMemo, $tpoMemo, $tmñoMemo) {
        $this->vMemo = $vMemo;
        $this->tpoMemo = $tpoMemo;
        $this->tmñoMemo = $tmñoMemo;
    }

    public function getVMemo() {
        return $this->vMemo;
    }

    public function getTpoMemo() {
        return $this->tpoMemo;
    }

    public function getTmñoMemo() {
        return $this->tmñoMemo;
    }
}