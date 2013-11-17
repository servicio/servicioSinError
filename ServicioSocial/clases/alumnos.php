<?php

/* idAlumno matricula idTutorias escProcedencia fecNacimiento estCivil nacionalidad sexo estado
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Solis
 */
class alumnos {
    private $idAlumno; 
   private  $matricula;
   private $idTutorias; 
   private $escProcedencia; 
   private $fecNacimiento;
   private $estCivil; 
   private $nacionalidad; 
   private $sexo; 
   private $estado;
   
   public function getIdAlumno() {
       return $this->idAlumno;
   }

   public function setIdAlumno($idAlumno) {
       $this->idAlumno = $idAlumno;
   }

   public function getMatricula() {
       return $this->matricula;
   }

   public function setMatricula($matricula) {
       $this->matricula = $matricula;
   }

   public function getIdTutorias() {
       return $this->idTutorias;
   }

   public function setIdTutorias($idTutorias) {
       $this->idTutorias = $idTutorias;
   }

   public function getEscProcedencia() {
       return $this->escProcedencia;
   }

   public function setEscProcedencia($escProcedencia) {
       $this->escProcedencia = $escProcedencia;
   }

   public function getFecNacimiento() {
       return $this->fecNacimiento;
   }

   public function setFecNacimiento($fecNacimiento) {
       $this->fecNacimiento = $fecNacimiento;
   }

   public function getEstCivil() {
       return $this->estCivil;
   }

   public function setEstCivil($estCivil) {
       $this->estCivil = $estCivil;
   }

   public function getNacionalidad() {
       return $this->nacionalidad;
   }

   public function setNacionalidad($nacionalidad) {
       $this->nacionalidad = $nacionalidad;
   }

   public function getSexo() {
       return $this->sexo;
   }

   public function setSexo($sexo) {
       $this->sexo = $sexo;
   }

   public function getEstado() {
       return $this->estado;
   }

   public function setEstado($estado) {
       $this->estado = $estado;
   }


}

?>
