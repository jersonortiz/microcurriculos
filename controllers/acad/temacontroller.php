<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../model/DAO/temaDAO.php';
require_once '../../model/DTO/temaDTO.php';

/**
 * Description of temacontroller
 *
 * @author jerson
 */
class temaController {



}

if (isset($_GET['acc'])) {
  $accion = $_GET['acc'];

  switch ($accion) {
    case 'reg':
      $nom = $_POST['nom'];
      $fac = $_POST['facultad'];
      $facc = new unidadController();
      $res = $facc->registroDepartamento($nom, $fac);

      if ($res == 'exitoso') {
        header('Location: ../../views/admin/seguimientomateria.php?ope=exito');
      } else {
        header('Location: ../../views/admin/seguimientomateria.php?ope=mal');
      }

      break;
  }
}