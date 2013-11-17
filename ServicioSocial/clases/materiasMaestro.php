<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materiasMaestro
 *
 * @author Comodoro
 */
class materiasMaestro {
   
    private $id;
    private $idMaestro;
    private $idMaterias;
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdMaestro() {
        return $this->idMaestro;
    }

    public function setIdMaestro($idMaestro) {
        $this->idMaestro = $idMaestro;
    }

    public function getIdMaterias() {
        return $this->idMaterias;
    }

    public function setIdMaterias($idMaterias) {
        $this->idMaterias = $idMaterias;
    }


}

?>
