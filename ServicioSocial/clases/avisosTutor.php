<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avisosTutor
 *
 * @author Administrador
 */
class avisosTutor {
    private $titulo;
    private $detalle;
    private $usuario;
    private $control;
    private $leido;            


    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function setDetalle($detalle) {
        $this->detalle = $detalle;
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


    public function getControl() {
        return $this->control;
    }

    public function setControl($control) {
        $this->control = $control;
    }

    public function getLeido() {
        return $this->leido;
    }

    public function setLeido($leido) {
        $this->leido = $leido;
    }


}

?>
