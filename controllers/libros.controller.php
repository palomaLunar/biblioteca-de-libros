<?php

require_once "../models/libros.modelo.php";

class libroControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new libro();
  }

  public function Inicio()
  {
    require_once "../views/header.php";
    require_once "../views/tabla.libros.php";
    require_once "../views/footer.php";
  }

  /** CREAR libro */
  public function CrearProd()
  {
    $titulo = "Registrar";
    $p = new libro();
    //He entrado a la opción de actualizar
    if (isset($_GET['idLi'])) {
      $p = $this->modelo->Obtener($_GET['idLi']);
      $titulo = "Actualizar";
    }

    require_once "../views/header.php";
    require_once "../views/form.libros.php";
    require_once "../views/footer.php";
  }


  /** GUARDAR libro */
  public function Guardar()
  {
    $p = new libro();
    $p->setPro_id(intval($_POST['idLi']));
    $p->setPro_titulo($_POST['titulo']);
    $p->setPro_autor($_POST['autor']);
    $p->setPro_genero($_POST['genero']);
    $p->setPro_anio($_POST['anio']);
    $p->setPro_isbn($_POST['isbn']);
    $p->setPro_cantidad($_POST['cantidad']);

    //Si el id está vacío es porque es un nuevo libro
    $p->getPro_id() > 0
      ? $this->modelo->Actualizar($p)
      : $this->modelo->Insertar($p);
    header("Location: ?c=libros");
  }

  /* BORRAR libro */
  public function Borrar()
  {
    $this->modelo->Eliminar($_GET['id']);
    header("Location: ?c=libros");
  }
}
