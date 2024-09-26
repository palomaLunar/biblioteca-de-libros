<?php
// c = catálogo
if (!isset($_GET['c'])) {

  require_once "../controllers/miembros.controller.php";
  $controlador = new usuarioControlador();

  call_user_func(array($controlador, 'Inicio'));
} else {
  $controlador = $_GET['c'];
  require_once "controllers/$controlador.controller.php";
  $controlador = ucwords($controlador) . 'Controlador';
  $controlador = new $controlador;
  $accion = isset($_GET['a']) ? $_GET['a'] : 'Inicio';
  call_user_func(array($controlador, $accion));
}