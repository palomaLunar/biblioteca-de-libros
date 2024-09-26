<main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?= $titulo ?></h1>
      <ol class="breadcrumb mb-4">
       
        <li class="breadcrumb-item"><a href="?c=libros">LIBROS</a></li>
        <li class="breadcrumb-item"><?= $titulo ?></li>
  
      </ol>
      <div class="card mb-4">
        <div class="card-body">
          <?= $titulo ?> productos
          <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
          .
        </div>
        <form method="post" action="?c=libros&a=Guardar">
  <H1>Formulario Libros</H1>
  <fieldset>
    <legend>
      REGISTRO DE NUEVOS LIBROS
    </legend>
    <div>
      <label for="idLi" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">ID DEL LIBRO</font>
        </font>
      </label>
      <input type="number" name="idLi" class="form-control" id="idLi" rows="1" value="<?= $p->getPro_id()?>"</input>
    </div>

    <div>
      <label for="titulo" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> TITULO DEL LIBRO</font>
        </font>
      </label>
      <input type="text" name="titulo" class="form-control" id="titulo" rows="1" value="<?= $p->getPro_titulo()?>"></input>
    </div>

    <div>
      <label for="autor" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> AUTOR</font>
        </font>
      </label>
      <input type="text" name="autor" class="form-control" id="autor" rows="1" value= "<?= $p->getPro_autor()?>"></input>
    </div>

    <div>
      <label for="genero" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> Genero </font>
        </font>
      </label>
      <input type="text" name="genero" class="form-control" id="genero" rows="1" value="<?= $p->getPro_genero()?>"></input>
    </div>

    <div>
      <label for="anio" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">AÑO DE PUBLICACION</font>
        </font>
      </label>
      <input type="numer" name="anio" class="form-control" id="anio" rows="1" value="<?= $p->getPro_anio()?>"></input>
    </div>

    <div>
      <label for="isbn" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> ISBN </font>
        </font>
      </label>
      <input type="numer" name="isbn" class="form-control" id="isbn" rows="1"  value="<?= $p->getPro_isbn()?>"></input>
    </div>
    <div>
      <label for="cantidad" class="form-label mt-4">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> cantidad </font>
        </font>
      </label>
      <input type="numer" name="cantidad" class="form-control" id="cantidad" rows="1"  value="<?= $p->getPro_cantidad()?>"></input>
    </div>

    <button type="submit" class="btn btn-primary">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Entregar</font>
      </font>
    </button>
</form>
</main>