<?php
require_once dirname(__DIR__).'../objects/persona.php'; 
session_start();

if ($_POST) {

  if ($_POST['action'] == 'login') {
$p=new Persona();
$p->login($_POST['correo'],$_POST['pass']);
   
  }
  if ($_POST['action']=='registro') {

    $user = new Persona();
    $user->setnombre($_POST['nombre']);
    $user->setEmail($_POST['email']);
    $user->setApellido($_POST['apellido']);
    $user->setPass(md5($_POST['pass']));
    $user->setCedula($_POST['cedula']);
    $user->setfecha($_POST['fecha']);
    $user->setTipo(1);
    $user->setstatus(0);


    $user->cargarUsuario();
  }
}
