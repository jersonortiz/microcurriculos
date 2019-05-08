<?php

require_once '../../model/util/Conexion.php';
require_once '../../model/DTO/estudianteDTO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudianteDAO
 *
 * @author jerson
 */
class estudianteDAO {
    

    public function guardar($ces) {
        $conexion = new Conexion();
        $mensaje = "Fallido";

        if ($conexion != null) {
            $consulta = $conexion->prepare('INSERT INTO estudiante(id ,codigo_persona,id_matricula )'
                    . ' VALUES(null, :codper,:idma )');
            //$consulta->bindParam(':id', $ces->getId());
            $consulta->bindParam(':codper', $ces->getCodigo_persona());
            $consulta->bindParam(':idma', $ces->getId_matricula());
            if ($consulta->execute()) {
                $mensaje = "exitoso";
            }
        }
        $conexion = null;
        return $mensaje;
    }

    /*
     * busca con base a la id
     */

    public function consultar($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM estudiante WHERE id= :idc');
        $consulta->bindParam(':idc', $id);
        $consulta->execute();


        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $ces = null;
        if (count($tabla_datos) == 1) {

            foreach ($tabla_datos as $con => $valor) {
                $ces = new estudianteDTO();
                $ces->setId($tabla_datos[$con]["id"]);
                $ces->setCodigo_persona($tabla_datos[$con]["codigo_persona"]);
                $ces->setId_matricula($tabla_datos[$con]["id_matricula"]);
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
        $consulta = $conexion->prepare('DELETE FROM estudiante WHERE id= :idc');
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
        $consulta = $conexion->prepare('SELECT * FROM estudiante');
        $consulta->execute();
        $ces = null;

        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $asct = array();

        foreach ($tabla_datos as $con => $valor) {
            $ces = new estudianteDTO();
            $ces->setId($tabla_datos[$con]["id"]);
            $ces->setCodigo_persona($tabla_datos[$con]["codigo_persona"]);
            $ces->setId_matricula($tabla_datos[$con]["id_matricula"]);
            array_push($asct, $ces);
        }
        return $asct;
    }

}
