<div class="container my-3 table-responsive">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal"><i class="far fa-plus-square"></i> Agregar Nuevo Blog</button>

    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Noticia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form id="formBlog" enctype="multipart/form-data">
                        <input type="hidden" id="id_post" name="id_post" value="">
                        <!-- Material input -->
                        <div class="form-group">
                            <label for="exampleForm2">Titulo</label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleForm2">Descripcion corta</label>
                            <input type="text" id="descorta" name="descorta" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="form7">Descripcion larga</label>
                            <textarea id="deslarga" class="md-textarea form-control" name="deslarga" rows="3"></textarea>
                        </div>


                        <div id="contenido-imagen">

                        </div>

                        <div class="custom-file">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            <input type="file" class="custom-file-input" name="imagen" id="customFileLang" lang="es">
                        </div>
                        <div id="alerta">
                        </div>
                        <!-- Material form group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-blue-grey" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-info" type="submit" id="guardarBlog">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <table id="paginationSimpleNumbers" class="table table-hover text-center" width="100%">
        <thead>
            <tr class="black white-text">
                <th class="th-sm">Id
                </th>
                <th class="th-sm">Titulo
                </th>
                <th class="th-sm">Contenido Corto
                </th>
                <th class="th-sm">Contenido Largo
                </th>
                <th class="th-sm">Imagen
                </th>
                <th class="th-sm">Fecha de Creacion
                </th>
                <th class="th-sm">Creador
                </th>
                <th class="th-sm">Acciones
                </th>
            </tr>
        </thead>
        <tbody id="tabla">

        </tbody>
    </table>
</div>