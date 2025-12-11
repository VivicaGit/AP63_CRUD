<?php
class GestorProtectora {
    private $listaAnimales = [];

    function agregar($animal) {
        $this->listaAnimales[] = $animal;
    }

    function listar(){
        return $this->listaAnimales;
    }

    function buscar($id){
        foreach ($this->listaAnimales as $animal){
            if ($animal->getId() == $id)
                return $animal;
        }
        return null;
    }

    function actualizar($id, $nuevoAnimal){
        $animal = $this->buscar($id); // esto ya no lo pillo mucho
        if ($animal){
          $animal->setNombre($nuevoAnimal);
         return true;
     }
     return false;
 }

    public function eliminar($id) {
        foreach ($this->listaAnimales as $i => $animal) {
            if ($animal->getId() == $id) {
                unset($this->listaAnimales[$i]);
                $this->listaAnimales = array_values($this->listaAnimales); // Reindexar
                return true;
            }
       }
        return false;
    }
}