<?php

class Reptil extends Animal{
    private $dientes;

    public function __construct($id, $nombre, $edad, $dientes)
    {
        parent::__construct($id, $nombre, $edad);
        $this->dientes=$dientes;
    }
    public function getDientes(){
        return $this->dientes;
    }

    public function setDientes($num){
        $this->dientes=$num;
    }

    public function mostrar()
    {
        return parent::mostrar() . " | Dientes: $this->dientes";
    }

}