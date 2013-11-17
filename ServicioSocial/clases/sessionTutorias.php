<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sessionTutorias
 *
 * @author Comodoro
 */
class sessionTutorias {

    private $id;
    private $matricula;
    private $fecha;
    private $descripcionSesion;
    private $objetivos;
    private $observaciones;
    private $tareasAsignadas;
    private $numeroSession;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getDescripcionSesion() {
        return $this->descripcionSesion;
    }

    public function setDescripcionSesion($descripcionSesion) {
        $this->descripcionSesion = $descripcionSesion;
    }

    public function getObjetivos() {
        return $this->objetivos;
    }

    public function setObjetivos($objetivos) {
        $this->objetivos = $objetivos;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function getTareasAsignadas() {
        return $this->tareasAsignadas;
    }

    public function setTareasAsignadas($tareasAsignadas) {
        $this->tareasAsignadas = $tareasAsignadas;
    }

    public function getNumeroSession() {
        return $this->numeroSession;
    }

    public function setNumeroSession($numeroSession) {
        $this->numeroSession = $numeroSession;
    }

}

?>
