<?php

class Mamifero extends Animal{
    private $patas;

    public function __construct($id, $nombre, $edad, $patas)
    {
        parent::__construct($id, $nombre, $edad);
        $this->patas=$patas;
    }
    public function getPatas(){
        return $this->patas;
    }

    public function setPatas($num){
        $this->patas=$num;
    }

    public function mostrar()
    {
        return parent::mostrar() . " | Patas: $this->patas";
    }

}