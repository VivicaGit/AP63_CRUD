<?php
class Vehiculo {
    protected $id;
    protected $nombre;
    protected $precio;

    public function __construct($id, $nombre, $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getPrecio() { return $this->precio; }

    // Setters (para editar/actualizar)
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setPrecio($precio) { $this->precio = $precio; }
}