<?php
class Moto extends Vehiculo {
    private $cilindrada; // baja (hasta 250 cc), media (300-750 cc) y alta (más de 750 cc)

    public function __construct($id, $nombre, $precio, $cilindrada = 300) {
        parent::__construct($id, $nombre, $precio);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() { return $this->cilindrada; }
    public function setCilindrada($cilindrada) { $this->cilindrada = $cilindrada; }
}