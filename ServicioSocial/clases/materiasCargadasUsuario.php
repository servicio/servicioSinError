<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materiasCargadasUsuario
 *
 * @author Comodoro
 */
class materiasCargadasUsuario {

    private $idMaterias;
    private $idUsuario;
    private $idCurso;
    private $año;
    private $cursando;

    public function getIdMaterias() {
        return $this->idMaterias;
    }

    public function setIdMaterias($idMaterias) {
        $this->idMaterias = $idMaterias;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    public function getAño() {
        return $this->año;
    }

    public function setAño($año) {
        $this->año = $año;
    }

    public function getCursando() {
        return $this->cursando;
    }

    public function setCursando($cursando) {
        $this->cursando = $cursando;
    }
}

?>
