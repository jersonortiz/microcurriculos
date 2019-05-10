<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of programaDTO
 *
 * @author Camilo J
 */
class programaDTO {
    //put your code here
    private $codigo;
    private $nombre_facultad;
    
            function __construct() {
        
    }
    function getCodigo() {
        return $this->codigo;
    }

    function getNombre_facultad() {
        return $this->nombre_facultad;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre_facultad($nombre_facultad) {
        $this->nombre_facultad = $nombre_facultad;
    }


}
