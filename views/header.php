<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="inicio.php">BIBLIO-TK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor04">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="inicio.php">Inicio
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="libros.php">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="miembros.php">Miembros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Préstamos/Devoluciones</a>
          </li>
        </ul>
        <form class="d-flex">
          <a href="../../models/Admin/cierraSesion.php"><button class="btn btn-secondary my-2 my-sm-0" type="submit">Cerrar Sesión</button></a>
        </form>
      </div>
    </div>
  </nav>