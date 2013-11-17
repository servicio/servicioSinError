<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alumnosinscritos
 *
 * @author Solis
 */
class alumnosinscritos {
    private $idGrupo;
    private $usuario;
    private $idMateria;
    public function getIdGrupo() {
        return $this->idGrupo;
    }

    public function setIdGrupo($idGrupo) {
        $this->idGrupo = $idGrupo;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getIdMateria() {
        return $this->idMateria;
    }

    public function setIdMateria($idMateria) {
        $this->idMateria = $idMateria;
    }


}

?>
