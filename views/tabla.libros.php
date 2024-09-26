<div class="card mb-4">
    <div class="card-body">
        Lista total de Libros
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            Lista de libros
        </div>
        <!-- Creo un botón para agregar -->
        <div>
            <a href="?c=libros&a=CrearProd" class="btn btn-primary btn-flat">
                <i class="fa fa-lg fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">ID</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TITULO</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">AUTOR</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">GENERO</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">AÑO DE PUBLICACION</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">ISBN</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">CANTIDAD DISPONIBLE</font>
                        </font>
                    </th>
                </tr>
            </thead>
            <tbody> <?php foreach ($this->modelo->Listar() as $res): ?>

                    <tr>
                        <th scope="row">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->id_libro ?></font>
                            </font>
                        </th>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->titulo ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->autor ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->genero ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->anio ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->isbn ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->cantidad ?></font>
                            </font>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>

        </table>

       