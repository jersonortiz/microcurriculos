<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of temaDTO
 *
 * @author Camilo J
 */
class temaDTO {
    //put your code here
    private $id;
    private $unidad;
    private $nombre;
    private $actividad_presencial;
    private $trabajo_independiente;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getActividad_presencial() {
        return $this->actividad_presencial;
    }

    function getTrabajo_independiente() {
        return $this->trabajo_independiente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setActividad_presencial($actividad_presencial) {
        $this->actividad_presencial = $actividad_presencial;
    }

    function setTrabajo_independiente($trabajo_independiente) {
        $this->trabajo_independiente = $trabajo_independiente;
    }


}
