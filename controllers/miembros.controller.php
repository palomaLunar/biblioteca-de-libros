<?php

require_once "../models/miembros.modelo.php"; //!cambiar a ruta correcta 

class usuarioControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new usuario();
  }

  public function Inicio()
  {
    require_once "../views/header.php"; //!//!cambiar a ruta correcta
    require_once "../views/tabla.miembros.php";//!cambiar a ruta correcta
    require_once "../views/footer.php";//!cambiar a ruta correcta
  }

  /** CREAR USUARIO */
  public function CrearProd()
  {
    $nombre = "Registrar";
    $p = new usuario();
    if (isset($_GET['idMiembro'])) {
      $p = $this->modelo->Obtener($_GET['idMiembro']);
      $nombre = "Actualizar";
    }

    require_once "../views/header.php";//!cambiar a ruta correcta
    require_once "../views/form.miembros.php";//!cambiar a ruta correcta
    require_once "../views/footer.php";//!cambiar a ruta correcta
  }


  /** GUARDAR USUARIO */
  public function Guardar()
  {
    $p = new usuario();
    $p->setPro_id(intval($_POST['idMiembro']));
    $p->setPro_nombre($_POST['nombreM']);
    $p->setPro_apellido($_POST['apellido']);
    $p->setPro_direccion($_POST['direccion']);
    $p->setPro_telefono($_POST['telefono']);
    $p->setPro_correo($_POST['correo']);
    $p->setPro_fecha($_POST['fechaInscripcion']);

    //Si el id está vacío es porque es un nuevo usuario 
    $p->getPro_id() > 0
      ? $this->modelo->Actualizar($p)
      : $this->modelo->Insertar($p);
    header("Location: ?c=usuario");
  }

  /* BORRAR PRODUCTO */
  public function Borrar()
  {
    $this->modelo->Eliminar($_GET['idMiembro']);
    header("Location:?c=usuario");
  }
}
