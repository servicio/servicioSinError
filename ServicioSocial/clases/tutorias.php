<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tutorias
 *
 * @author Comodoro
 */
class tutorias {

    private $lugarViviendo;
    private $estCivilPadre;
    private $escPadre;
    private $escMadre;
    private $ingresosMenFam;
    private $NumHermanos;
    private $PerPlaticar;
    private $relacionPadre;
    private $relacionMadre;
    private $fuenteIngreso;
    private $habMaterias;
    private $estudiosExtTec;
    private $cualExtTec;
    private $pasatiempos;
    private $trabajas;
    private $dondeTrabajas;
    private $ocupacionTrab;
    private $porqTrab;
    private $ingresastRazTec;
    private $ingresastRazCar;
    private $obstaculosCar;
    private $alergias;
    private $cualAlergia;
    private $cronica;
    private $cronicaCual;
    private $atencionPsi;
    private $cualAtencionPsi;
    private $atencionMedica;
    private $bebidasAlc;
    private $fumador;
    private $problemLegal;
    private $motivo;
    private $deporte;
    private $cualDep;
    private $frecuenciaDept;
    private $realizado;
    private $usuario;
    private $lugarOcupas;
    private $especialidad;
    private $promedio;
    private $hereditaria;
    private $hereditariaQuien;
    private $mental;
    private $mentalCual;
    
    private $escuela1;
    private $estado1;
    private $grado1;
    private $escuela2;
    private $estado2;
    private $grado2;
    private $escuela3;
    private $estado3;
    private $grado3;
    public function getEscuela1() {
        return $this->escuela1;
    }

    public function setEscuela1($escuela1) {
        $this->escuela1 = $escuela1;
    }

    public function getEstado1() {
        return $this->estado1;
    }

    public function setEstado1($estado1) {
        $this->estado1 = $estado1;
    }

    public function getGrado1() {
        return $this->grado1;
    }

    public function setGrado1($grado1) {
        $this->grado1 = $grado1;
    }

    public function getEscuela2() {
        return $this->escuela2;
    }

    public function setEscuela2($escuela2) {
        $this->escuela2 = $escuela2;
    }

    public function getEstado2() {
        return $this->estado2;
    }

    public function setEstado2($estado2) {
        $this->estado2 = $estado2;
    }

    public function getGrado2() {
        return $this->grado2;
    }

    public function setGrado2($grado2) {
        $this->grado2 = $grado2;
    }

    public function getEscuela3() {
        return $this->escuela3;
    }

    public function setEscuela3($escuela3) {
        $this->escuela3 = $escuela3;
    }

    public function getEstado3() {
        return $this->estado3;
    }

    public function setEstado3($estado3) {
        $this->estado3 = $estado3;
    }

    public function getGrado3() {
        return $this->grado3;
    }

    public function setGrado3($grado3) {
        $this->grado3 = $grado3;
    }

        public function getMentalCual() {
        return $this->mentalCual;
    }

    public function setMentalCual($mentalCual) {
        $this->mentalCual = $mentalCual;
    }

    public function getLugarOcupas() {
        return $this->lugarOcupas;
    }

    public function setLugarOcupas($lugarOcupas) {
        $this->lugarOcupas = $lugarOcupas;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function getPromedio() {
        return $this->promedio;
    }

    public function setPromedio($promedio) {
        $this->promedio = $promedio;
    }

    public function getHereditaria() {
        return $this->hereditaria;
    }

    public function setHereditaria($hereditaria) {
        $this->hereditaria = $hereditaria;
    }

    public function getHereditariaQuien() {
        return $this->hereditariaQuien;
    }

    public function setHereditariaQuien($herditariaQuien) {
        $this->hereditariaQuien = $herditariaQuien;
    }

    public function getMental() {
        return $this->mental;
    }

    public function setMental($mental) {
        $this->mental = $mental;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setIdTutorias($idTutorias) {
        $this->idTutorias = $idTutorias;
    }

    public function getLugarViviendo() {
        return $this->lugarViviendo;
    }

    public function setLugarViviendo($lugarViviendo) {
        $this->lugarViviendo = $lugarViviendo;
    }

    public function getEstCivilPadre() {
        return $this->estCivilPadre;
    }

    public function setEstCivilPadre($estCivilPadre) {
        $this->estCivilPadre = $estCivilPadre;
    }

    public function getEscPadre() {
        return $this->escPadre;
    }

    public function setEscPadre($escPadre) {
        $this->escPadre = $escPadre;
    }

    public function getEscMadre() {
        return $this->escMadre;
    }

    public function setEscMadre($escMadre) {
        $this->escMadre = $escMadre;
    }

    public function getIngresosMenFam() {
        return $this->ingresosMenFam;
    }

    public function setIngresosMenFam($ingresosMenFam) {
        $this->ingresosMenFam = $ingresosMenFam;
    }

    public function getNumHermanos() {
        return $this->NumHermanos;
    }

    public function setNumHermanos($NumHermanos) {
        $this->NumHermanos = $NumHermanos;
    }

    public function getPerPlaticar() {
        return $this->PerPlaticar;
    }

    public function setPerPlaticar($PerPlaticar) {
        $this->PerPlaticar = $PerPlaticar;
    }

    public function getRelacionPadre() {
        return $this->relacionPadre;
    }

    public function setRelacionPadre($relacionPadre) {
        $this->relacionPadre = $relacionPadre;
    }

    public function getRelacionMadre() {
        return $this->relacionMadre;
    }

    public function setRelacionMadre($relacionMadre) {
        $this->relacionMadre = $relacionMadre;
    }

    public function getFuenteIngreso() {
        return $this->fuenteIngreso;
    }

    public function setFuenteIngreso($fuenteIngreso) {
        $this->fuenteIngreso = $fuenteIngreso;
    }

    public function getHabMaterias() {
        return $this->habMaterias;
    }

    public function setHabMaterias($habMaterias) {
        $this->habMaterias = $habMaterias;
    }

    public function getEstudiosExtTec() {
        return $this->estudiosExtTec;
    }

    public function setEstudiosExtTec($estudiosExtTec) {
        $this->estudiosExtTec = $estudiosExtTec;
    }

    public function getCualExtTec() {
        return $this->cualExtTec;
    }

    public function setCualExtTec($cualExtTec) {
        $this->cualExtTec = $cualExtTec;
    }

    public function getPasatiempos() {
        return $this->pasatiempos;
    }

    public function setPasatiempos($pasatiempos) {
        $this->pasatiempos = $pasatiempos;
    }

    public function getTrabajas() {
        return $this->trabajas;
    }

    public function setTrabajas($trabajas) {
        $this->trabajas = $trabajas;
    }

    public function getDondeTrabajas() {
        return $this->dondeTrabajas;
    }

    public function setDondeTrabajas($dondeTrabajas) {
        $this->dondeTrabajas = $dondeTrabajas;
    }

    public function getOcupacionTrab() {
        return $this->ocupacionTrab;
    }

    public function setOcupacionTrab($ocupacionTrab) {
        $this->ocupacionTrab = $ocupacionTrab;
    }

    public function getPorqTrab() {
        return $this->porqTrab;
    }

    public function setPorqTrab($porqTrab) {
        $this->porqTrab = $porqTrab;
    }

    public function getIngresastRazTec() {
        return $this->ingresastRazTec;
    }

    public function setIngresastRazTec($ingresastRazTec) {
        $this->ingresastRazTec = $ingresastRazTec;
    }

    public function getIngresastRazCar() {
        return $this->ingresastRazCar;
    }

    public function setIngresastRazCar($ingresastRazCar) {
        $this->ingresastRazCar = $ingresastRazCar;
    }

    public function getObstaculosCar() {
        return $this->obstaculosCar;
    }

    public function setObstaculosCar($obstaculosCar) {
        $this->obstaculosCar = $obstaculosCar;
    }

    public function getAlergias() {
        return $this->alergias;
    }

    public function setAlergias($alergias) {
        $this->alergias = $alergias;
    }

    public function getCualAlergia() {
        return $this->cualAlergia;
    }

    public function setCualAlergia($cualAlergia) {
        $this->cualAlergia = $cualAlergia;
    }

    public function getCronica() {
        return $this->cronica;
    }

    public function setCronica($cronica) {
        $this->cronica = $cronica;
    }

    public function getCronicaCual() {
        return $this->cronicaCual;
    }

    public function setCronicaCual($cronicaCual) {
        $this->cronicaCual = $cronicaCual;
    }

    public function getAtencionPsi() {
        return $this->atencionPsi;
    }

    public function setAtencionPsi($atencionPsi) {
        $this->atencionPsi = $atencionPsi;
    }

    public function getCualAtencionPsi() {
        return $this->cualAtencionPsi;
    }

    public function setCualAtencionPsi($cualAtencionPsi) {
        $this->cualAtencionPsi = $cualAtencionPsi;
    }

    public function getAtencionMedica() {
        return $this->atencionMedica;
    }

    public function setAtencionMedica($atencionMedica) {
        $this->atencionMedica = $atencionMedica;
    }

    public function getBebidasAlc() {
        return $this->bebidasAlc;
    }

    public function setBebidasAlc($bebidasAlc) {
        $this->bebidasAlc = $bebidasAlc;
    }

    public function getFumador() {
        return $this->fumador;
    }

    public function setFumador($fumador) {
        $this->fumador = $fumador;
    }

    public function getProblemLegal() {
        return $this->problemLegal;
    }

    public function setProblemLegal($problemLegal) {
        $this->problemLegal = $problemLegal;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function getDeporte() {
        return $this->deporte;
    }

    public function setDeporte($deporte) {
        $this->deporte = $deporte;
    }

    public function getCualDep() {
        return $this->cualDep;
    }

    public function setCualDep($cualDep) {
        $this->cualDep = $cualDep;
    }

    public function getFrecuenciaDept() {
        return $this->frecuenciaDept;
    }

    public function setFrecuenciaDept($frecuenciaDept) {
        $this->frecuenciaDept = $frecuenciaDept;
    }

    public function getRealizado() {
        return $this->realizado;
    }

    public function setRealizado($realizado) {
        $this->realizado = $realizado;
    }

}

?>