<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datosPersonales
 *
 * @author Comodoro
 */
class datosPersonales {

    private $idDatosPersonales;
    private $usuario;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    
    public function getIdDatosPersonales() {
        return $this->idDatosPersonales;
    }

    public function setIdDatosPersonales($idDatosPersonales) {
        $this->idDatosPersonales = $idDatosPersonales;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    public function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    public function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    //put your code here
}

?>
