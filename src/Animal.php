<?php

class Animal {
    protected $id;
    protected $nombre;
    protected $edad;

    function __construct($id, $nombre, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function mostrar() {
        return "$this->id , $this->nombre , $this->edad";
    }
}