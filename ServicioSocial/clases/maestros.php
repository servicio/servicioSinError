<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of maestros
 *
 * @author Comodoro
 */
class maestros {

    private $id;
    private $maestro;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMaestro() {
        return $this->maestro;
    }

    public function setMaestro($maestro) {
        $this->maestro = $maestro;
    }

}

?>
