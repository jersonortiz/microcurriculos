<?php

require_once '../../model/util/Conexion.php';
require_once '../../model/DTO/planEstudiosDTO.php';
require_once '../../model/DAO/grupoDAO.php';
require_once '../../model/DTO/grupoDTO.php';
require_once '../../model/DAO/asignaturaDAO.php';
require_once '../../model/DTO/asignaturaDTO.php';
require_once '../../model/DAO/unidadDAO.php';
require_once '../../model/DTO/unidadDTO.php';
require_once '../../model/DAO/pruebaDAO.php';
require_once '../../model/DTO/pruebaDTO.php';

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
                . "P.nombre , G.grupo_numero FROM asignatura A , grupo G ,docente D , persona P "
                . "WHERE A.nombre_plandeestudios = :pde AND "
                . "G.codigo_asignatura = A.codigo AND G.grupo_numero=D.gruponumero "
                . "AND D.codigo_persona=P.codigo ORDER BY A.semestre");
        $consulta->bindParam(':pde', $fac);
        $consulta->execute();
        $ces = null;

        $tabla_datos = $consulta->fetchAll(PDO::FETCH_NUM);

        $astraba = array();
        $sem = 1;
        $semes = array();

        foreach ($tabla_datos as $con) {
            if (((int) $con[2]) != $sem) {

                array_push($semes, $con);
                array_push($astraba, $semes);
                $semes = array();
                $sem = (int) $con[2];
            } else {

                array_push($semes, $con);
            }
        }
        if (count($semes) != 0) {
            array_push($astraba, $semes);
        }
        return $astraba;
    }

    public function consultaMateria($cod, $gru) {
        $grdao = new grupoDAO();
        $grupos = $grdao->consultar($cod);
        $asigdao = new asignaturaDAO();
        $asign = $asigdao->consultar($cod);
        $udao = new unidadDAO();

        $retorno = array();

        foreach ($grupos as $grup) {

            $unidades = $udao->consultar($cod, $grup->getGrupo());
            //fnciona
            
            print_r($unidades);
            echo "ola";
            $datounidad = $this->cargapruebas($unidades);
            echo "ola";

            
            array_push($retorno, array("grup" => $grup, "unid" => $datounidad));
        }
        return $retorno;
    }

    public function cargapruebas($unidades) {
         echo "<br> ola";
        $prdao = new pruebaDAO();
        $datounidad = array();
        
        foreach ($unidades as $unidad) {

            $pruebas = $prdao->consultarPorUnidad($unidad->getId());
            echo "ola";
            print_r($pruebas);
            $datoper = $this->cargapersonas($pruebas);

            array_push($datounidad, array("uni" => $unidad, "pru" => $datoper));
        }
        return $datounidad;
    }

    public function cargapersonas($pruebas) {
        $datoper = array();

        foreach ($pruebas as $prueba) {
            $retor = $this->consultaDatos($prueba->getId());
            print_r($retor);
            array_push($datoper, $retor);
        }
        return $datoper;
    }

    public function consultaDatos($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT PE.codigo , PE.nombre ,"
                . " PE.apellidos  FROM prueba P , matricula M  ,estudiante E ,"
                . "persona PE WHERE P.id_prueba=M.id AND E.id_matricula=M.id AND"
                . " PE.codigo = E.codigo_persona AND P.id =:idc");
        $consulta->bindParam(':idc', $id);
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
