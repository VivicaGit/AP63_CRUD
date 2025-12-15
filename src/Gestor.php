<?php
class Gestor {
    private $elementos = [];

    public function agregar($objeto) {
        $this->elementos[] = $objeto;
    }

    public function listar() {
        return $this->elementos;
    }

    public function actualizar($id, $nombre, $precio) {
        foreach ($this->elementos as $elem) {
            if ($elem->getId() == $id) {
                $elem->setNombre($nombre);
                $elem->setPrecio($precio);
                return;
            }
        }
    }

    public function eliminar($id) {
        foreach ($this->elementos as $i => $elem) {
            if ($elem->getId() == $id) {
                // unset es como arrancar la hoja de la libreta
                unset($this->elementos[$i]);
                // Reindexar array para evitar huecos en los índices numéricos
                $this->elementos = array_values($this->elementos);
                return;
            }
        }
    }
}