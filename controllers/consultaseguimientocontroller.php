<?php

require_once '../../model/util/Conexion.php';
require_once '../../model/DTO/planEstudiosDTO.php';

class consultaController {

    public function listarPlanEstudios() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM plandeestudios');
        $consulta->execute();
        $ces = null;
        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $astraba = array();

        foreach ($tabla_datos as $con => $valor) {

            $ces = new planEstudiosDTO();
            $ces->setNombre($tabla_datos[$con]["nombre"]);
            $ces->setCodigo($tabla_datos[$con]["codigo"]);
            $var = $this->listarmaterias($tabla_datos[$con]["nombre"]);
            $arr = array("pro" => $ces, "mat" => $var);
            array_push($astraba, $arr);
        }
        return $astraba;
    }

    public function listarmaterias($fac) {

        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT A.codigo , A.nombre ,A.semestre ,G.grupo , "
                . "P.nombre FROM asignatura A , grupo G ,docente D , persona P "
                . "WHERE A.nombre_plandeestudios = :pde AND "
                . "G.codigo_asignatura = A.codigo AND G.grupo_numero=D.gruponumero "
                . "AND D.codigo_persona=P.codigo ORDER BY A.semestre");
        $consulta->bindParam(':pde', $fac);
        $consulta->execute();
        $ces = null;

        $tabla_datos = $consulta->fetchAll(PDO::FETCH_NUM);

        $astraba = array();

        foreach ($tabla_datos as $con) {
            array_push($astraba, $con);
        }

        return $astraba;
    }

}

?>
