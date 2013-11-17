<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Comodoro
 */
class usuario {

    private $usuario;
    private $pass;
    private $Email;
    private $Nombres;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $tipo;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function getNombres() {
        return $this->Nombres;
    }

    public function setNombres($Nombres) {
        $this->Nombres = $Nombres;
    }

    public function getApellidoPaterno() {
        return $this->ApellidoPaterno;
    }

    public function setApellidoPaterno($ApellidoPaterno) {
        $this->ApellidoPaterno = $ApellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->ApellidoMaterno;
    }

    public function setApellidoMaterno($ApellidoMaterno) {
        $this->ApellidoMaterno = $ApellidoMaterno;
    }

}

?>
