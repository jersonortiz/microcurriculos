<?php

require_once '../model/util/Conexion.php';
require_once '../model/DTO/asignaturaDTO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of asignaturaDAO
 *
 * @author jerson
 */
class asignaturaDAO {

    /**
     *  funcion para guardar en la base de datos
     *  en caso de haber podido guardar apropiadamente devolvera el mensaje "exitoso"
     */
    public function guardar($ces) {
        $conexion = new Conexion();
        $mensaje = "Fallido";

        if ($conexion != null) {
            $consulta = $conexion->prepare('INSERT INTO asignatura(codigo,nombre, semestre, intensidadhoraria,creditos, nombre_plandeestudios) VALUES(:cod, :nom , :sem , ;int, :cre,:pla)');


            $consulta->bindParam(':cod', $ces->getCodigo());
            $consulta->bindParam(':nom', $ces->getNombre());
            $consulta->bindParam(':sem', $ces->getSemestre());
            $consulta->bindParam(':int', $ces->getIntencidad_horaria());
            $consulta->bindParam(':cre', $ces->getCreditos());
            $consulta->bindParam(':pla', $ces->getNombre_planestudio());

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
        $consulta = $conexion->prepare('SELECT * FROM asignatura WHERE codigo= :idc');
        $consulta->bindParam(':idc', $id);
        $consulta->execute();


        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $ces = null;
        if (count($tabla_datos) == 1) {

            foreach ($tabla_datos as $con => $valor) {
                $ces = new asignaturaDTO();
                $ces->setCodigo($tabla_datos[$con]["codigo"]);
                $ces->setNombre($tabla_datos[$con]["nombre"]);
                $ces->setSemestre($tabla_datos[$con]["semestre"]);
                $ces->setIntencidad_horaria($tabla_datos[$con]["intensidadhoraria"]);
                $ces->setCreditos($tabla_datos[$con]["creditos"]);
                $ces->setNombre_planestudio($tabla_datos[$con]["nombre_plandeestudios"]);
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
        $consulta = $conexion->prepare('DELETE FROM asignatura WHERE codigo= :idc');
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
            $ces = new asignaturaDTO();
            $ces->setCodigo($tabla_datos[$con]["codigo"]);
            $ces->setNombre($tabla_datos[$con]["nombre"]);
            $ces->setSemestre($tabla_datos[$con]["semestre"]);
            $ces->setIntencidad_horaria($tabla_datos[$con]["intensidadhoraria"]);
            $ces->setCreditos($tabla_datos[$con]["creditos"]);
            $ces->setNombre_planestudio($tabla_datos[$con]["nombre_plandeestudios"]);

            array_push($astraba, $ces);
        }
        return $astraba;
    }

}
