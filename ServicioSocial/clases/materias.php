<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materias
 *
 * @author Solis
 */
class materias {

    private $id;
    private $idEspecialidad;
    private $materia;
    private $tiempos;
    private $creditos;
    private $semestre;
    private $año;
    private $curso;

    public function getMateria() {
        return $this->materia;
    }

    public function setMateria($materia) {
        $this->materia = $materia;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdEspecialidad() {
        return $this->idEspecialidad;
    }

    public function setIdEspecialidad($idEspecialidad) {
        $this->idEspecialidad = $idEspecialidad;
    }

    public function getTiempos() {
        return $this->tiempos;
    }

    public function setTiempos($tiempos) {
        $this->tiempos = $tiempos;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function getSemestre() {
        return $this->semestre;
    }

    public function setSemestre($semestre) {
        $this->semestre = $semestre;
    }

    public function getAño() {
        return $this->año;
    }

    public function setAño($año) {
        $this->año = $año;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

}

?>
