<?php

require_once ('../objects/persona.php'); 

if ($_POST) {
 if ($_POST['action'] == 'datos') {

$u=new Persona();
$u->mostrarusuario();


 }
 if ($_POST['action'] == 'modificar_usuario') {

  $user=new Persona();
  $user->setnombre($_POST['nombre']);
  $user->setEmail($_POST['email']);
  $user->setApellido($_POST['apellido']);

  $user->setCedula($_POST['cedula']);
  $user->setfecha($_POST['fecha']);
  
$user->modificarUsuario();
 
}
 
 
}
