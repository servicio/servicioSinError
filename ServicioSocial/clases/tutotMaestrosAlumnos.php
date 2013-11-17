<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tutotMaestrosAlumnos
 *
 * @author Comodoro
 */
class tutotMaestrosAlumnos {

    private $id;
    private $idMaestro;
    private $matricula;

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

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}

?>
