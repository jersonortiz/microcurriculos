<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../model/DAO/planestudioDAO.php';
require_once '../../model/DTO/planEstudiosDTO.php';

/**
 * Description of planestudiocontroller
 *
 * @author jerson
 */
class planestudiocontroller {

    function registroPlanEstudio($nom, $pro) {
        $facdto = new planEstudiosDTO();
        $facdao = new planestudioDAO();
        $facdto->setNombre($nom);
        $facdto->setCodigo($pro);
        print_r($facdto);
        //$facdao->guardar($facdto);
    }

}

if (isset($_GET['acc'])) {
    $accion = $_GET['acc'];
    switch ($accion) {
        case 'reg':
            $nom = $_POST['nom'];
            $pro = $_POST["prog"];
            $facc = new planestudiocontroller();
            $facc->registroPlanEstudio($nom, $pro);
            break;
    }
}
