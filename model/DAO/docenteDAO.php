<?php

require_once '../../model/util/Conexion.php';
require_once '../../model/DTO/docenteDTO.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of docenteDAO
 *
 * @author jerson
 */
class docenteDAO {

    public function guardar($ces) {
        $conexion = new Conexion();
        $mensaje = "Fallido";

        if ($conexion != null) {
            $consulta = $conexion->prepare('INSERT INTO docente(id ,codigo_persona,nombre_departamento, gruponumero )'
                    . ' VALUES(null, :codper,:nomdep ,:numgrup )');
            //$consulta->bindParam(':id', $ces->getId());
            $consulta->bindParam(':codper', $ces->getCodigo_persona());
            $consulta->bindParam(':nomdep', $ces->getNombre_departamento());
            $consulta->bindParam(':numgrup', $ces->getGruponumero());

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
        $consulta = $conexion->prepare('SELECT * FROM docente WHERE id= :idc');
        $consulta->bindParam(':idc', $id);
        $consulta->execute();


        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $ces = null;
        if (count($tabla_datos) == 1) {

            foreach ($tabla_datos as $con => $valor) {
                $ces = new docenteDTO();
                $ces->setId($tabla_datos[$con]["id"]);
                $ces->setCodigo_persona($tabla_datos[$con]["codigo_persona"]);
                $ces->setNombre_departamento($tabla_datos[$con]["nombre_departamento"]);
                $ces->setGruponumero($tabla_datos[$con]["gruponumero"]);
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
        $consulta = $conexion->prepare('DELETE FROM docente WHERE id= :idc');
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
        $consulta = $conexion->prepare('SELECT * FROM docente');
        $consulta->execute();
        $ces = null;

        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $asct = array();

        foreach ($tabla_datos as $con => $valor) {
            $ces = new docenteDTO();
            $ces->setId($tabla_datos[$con]["id"]);
            $ces->setCodigo_persona($tabla_datos[$con]["codigo_persona"]);
            $ces->setNombre_departamento($tabla_datos[$con]["nombre_departamento"]);
            $ces->setGruponumero($tabla_datos[$con]["gruponumero"]);
            array_push($asct, $ces);
        }
        return $asct;
    }

}
