<div class="card mb-4">
    <div class="card-body">
        listado de miembros selectos de nuestra biblio-TK
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            MIEMBROS.
        </div>
        <!-- Creo un botón para agregar -->
        <div>
            <a href="?c=miembros&a=CrearProd" class="btn btn-primary btn-flat">
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
                            <font style="vertical-align: inherit;">NOMBRE</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">APELLIDO</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">DIRECCION</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TELEFONO</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EMAIL</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">FECHA  DE INCRIPCION</font>
                        </font>
                    </th>
                </tr>
            </thead>
            <tbody> <?php foreach ($this->modelo->Listar() as $res): ?>

                    <tr>
                        <th scope="row">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->id_usuario ?></font>
                            </font>
                        </th>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->nombre ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->apellido ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->direccion ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->telefono ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->email ?></font>
                            </font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $res->fecha_inscripcion ?></font>
                            </font>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>

        </table>

       