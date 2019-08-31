<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../model/DAO/unidadDAO.php';
require_once '../../model/DTO/unidadDTO.php';

/**
 * Description of unidadcontroller
 *
 * @author jerson
 */
class unidadController {

  function registroUnidad($mic, $nom,$hpre,$hind){

  }

  function listaUnidad(){

  }

  function eliminaUnidad(){

  }

  function editaUnidad(){

  }



}

if (isset($_GET['acc'])) {
  $accion = $_GET['acc'];

  switch ($accion) {
    case 'reg':
      $mic = $_POST['micro'];
      $nom = $_POST['nom'];
      $hpre = $_POST['hpre'];
      $hind = $_POST['hind'];
      $uncc = new unidadController();
      $res = $uncc->registrounidad($mic,$nom,$hpre,$hind);

      if ($res == 'exitoso') {
        //header('Location: ../../views/admin/seguimientomateria.php?ope=exito');
      } else {
        //header('Location: ../../views/admin/seguimientomateria.php?ope=mal');
      }
      break;
      
    case 'lis':
      break;
    case 'eli':
      break;
    case 'edi':
      break;
  }
}