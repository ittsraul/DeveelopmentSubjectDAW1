<?php
/* Esta clase ha sido hecha par Lucia y retocada por Dani */
class Componente {
    private $idComp;
    private $clase;
    private $marca;
    private $modelo;
    private $dscripComercial;
    private $dscripTecnica;
    private $precioOriginal;
    private $precioRebajado;
    private $wConsumo;
    private $rgb;

    public function __construct($idComp,$clase,$marca,$modelo,$dscripComercial, $dscripTecnica, $precioOriginal,$precioRebajado, $wConsumo,  $rgb) {
        $this->idComp =$idComp;
        $this->clase = $clase;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dscripComercial = $dscripComercial;
        $this->dscripTecnica = $dscripTecnica;
        $this->precioOriginal = $precioOriginal;
        $this->precioRebajado = $precioRebajado;
        $this->wConsumo = $wConsumo;
        $this->rgb = $rgb;
    }

    public function cutDescription($length = 160)
    /* Este método ha sido hecho por Dani */
    //?Esta función sirve para acortar una descripcion para una targeta.
    { 
        return substr($this->dscripComercial,0,$length).'...'; 
    }
    
    public function getClase(){
        return $this->clase;
    }

    public function getIdComp(){
        return $this->idComp;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPrecioOriginal() {
        return $this->precioOriginal;
    }

    public function getPrecioRebajado() {
        return $this->precioRebajado;
    }

    public function getwConsumo() {
        return $this->wConsumo;
    }

    public function getDscripTecnica() {
        return $this->dscripTecnica;
    }

    public function getDscripComercial() {
        return $this->dscripComercial;
    }

    public function getRgb() {
        return $this->rgb;
    }

    
}
