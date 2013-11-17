<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of curso
 *
 * @author Solis
 */
class curso {
   private $curso;
   private $id;
   public function getCurso() {
       return $this->curso;
   }

   public function setCurso($curso) {
       $this->curso = $curso;
   }
   public function getId() {
       return $this->id;
   }

   public function setId($id) {
       $this->id = $id;
   }




}

?>
