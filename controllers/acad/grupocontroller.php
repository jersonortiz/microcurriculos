<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../model/DAO/grupoDAO.php';
require_once '../../model/DTO/grupoDTO.php';

/**
 * Description of grupocontroller
 *
 * @author jerson
 */
class grupocontroller {

    function registroGrupo($cod, $gru) {

        $facdao = new grupoDAO();
        $ces = new grupoDTO();

        $ces->setCodigo_asignatura($cod);
        $ces->setGrupo($gru);

        //print_r($ces);
        return $facdao->guardar($ces);
    }

}

if (isset($_GET['acc'])) {
    $accion = $_GET['acc'];

    switch ($accion) {
        case 'reg':
            var_dump($_POST);
            if (isset($_POST['regrupo'])) {
                $gru = $_POST['grup'];
                $cod = $_POST['cod'];

                $facc = new grupocontroller();
              echo $facc->registroGrupo($cod, $gru);
            }
            break;
    }
}