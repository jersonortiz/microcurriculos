<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of grupoDTO
 *
 * @author Camilo J
 */
class grupoDTO {
    //put your code here
    private $grupo_numero;
    private $codigo_asignatura;
    
    function __construct() {
        
    }
    
    function getGrupo_numero() {
        return $this->grupo_numero;
    }

    function getCodigo_asignatura() {
        return $this->codigo_asignatura;
    }

    function setGrupo_numero($grupo_numero) {
        $this->grupo_numero = $grupo_numero;
    }

    function setCodigo_asignatura($codigo_asignatura) {
        $this->codigo_asignatura = $codigo_asignatura;
    }


}