<?php

require_once '../model/util/Conexion.php';
require_once '../model/DTO/grupoDTO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidadDAO
 *
 * @author jerson
 */
class unidadDAO {

    /**
     *  funcion para guardar en la base de datos
     *  en caso de haber podido guardar apropiadamente devolvera el mensaje "exitoso"
     */
    public function guardar($ces) {
        $conexion = new Conexion();
        $mensaje = "Fallido";

        if ($conexion != null) {
            $consulta = $conexion->prepare('INSERT INTO unidad(nombre_contenido,id_microcurriculo, horaspresenciales , horasindependientes , horatotal) VALUES(:nom, :idm , :hpr , :hin , :hto)');
            $consulta->bindParam(':nom', $ces->getNombre());
            $consulta->bindParam(':idm', $ces->getId_microcurriculo());
            $consulta->bindParam(':hpr', $ces->getHora_presencial());
            $consulta->bindParam(':hin', $ces->getHora_independiente());
            $consulta->bindParam(':hto', $ces->getHora_total());

            if ($consulta->execute()) {
                $mensaje = "exitoso";
            }
        }
        $conexion = null;
        return $mensaje;
    }

    /*
     * busca con base a la id de la asignatura
     */

    public function consultar($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM unidad WHERE codigo_asignatura= :idc');
        $consulta->bindParam(':idc', $id);
        $consulta->execute();
        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $ces = null;
        if (count($tabla_datos) == 1) {

            foreach ($tabla_datos as $con => $valor) {
                $ces = new unidadDTO();
                $ces->setGrupo_numero($tabla_datos[$con]["grupo_numero"]);
                $ces->setCodigo_asignatura($tabla_datos[$con]["codigo_asignatura"]);
                $ces->setGrupo($tabla_datos[$con]["grupo"]);
            }
            return $ces;
        } else {
            return null;
        }
    }

    /*
     * elimina con base a la id
     */

    public function eliminar($id) {
        $mensaje = "Fallido";
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM grupo WHERE grupo_numero= :idc');
        $consulta->bindParam(':idc', $id);
        if ($consulta->execute()) {
            $mensaje = "exitoso";
        }
        return $mensaje;
    }

    /*
     * devuelve un array con los objetos
     * puede usar un foreach para acceder a los vlores
     *
     */
    public function listar() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM asignatura');
        $consulta->execute();
        $ces = null;
        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $astraba = array();
        
        foreach ($tabla_datos as $con => $valor) {
            $ces = new grupoDTO();
            $ces->setGrupo_numero($tabla_datos[$con]["grupo_numero"]);
            $ces->setCodigo_asignatura($tabla_datos[$con]["codigo_asignatura"]);
            $ces->setGrupo($tabla_datos[$con]["grupo"]);
            array_push($astraba, $ces);
        }
        return $astraba;
    }
}
