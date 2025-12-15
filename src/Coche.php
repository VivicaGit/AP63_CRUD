<?php
class Coche extends Vehiculo {
    private $puertas; // (2, 3, 4 o 5. normalmente 3 o 5, ya que cuenta el maletero si la puerta incluye la luna trasera)

    public function __construct($id, $nombre, $precio, $puertas = 5) {
        parent::__construct($id, $nombre, $precio);
        $this->puertas = $puertas;
    }

    public function getPuertas() { return $this->puertas; }
    public function setPuertas($puertas) { $this->puertas = $puertas; }
}