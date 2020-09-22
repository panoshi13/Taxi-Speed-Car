<div class="container my-3" style="width: 700px;">
    <div class="card">
        <h5 class="card-header h5">Crear Blog</h5>
        <div class="card-body">
            <!-- Material form group -->
            <div id="alerta">
            </div>
            <form id="formBlog" enctype="multipart/form-data">
                <input type="hidden" id="id_user" name="id_user" value=<?=$_SESSION['verify']->id?>> 
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="titulo" name="titulo" class="form-control">
                    <label for="form1">Titulo</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="descorta" name="descorta"class="form-control">
                    <label for="form1">Descripcion corta</label>
                </div>
                <div class="md-form">
                    <textarea id="deslarga" class="md-textarea form-control" name="deslarga" rows="10" ></textarea>
                    <label for="form7">Descripcion larga</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>

                <!-- Material form group -->
                <button class="btn btn-info btn-block my-4" type="submit" id="guardarBlog">Guardar</button>
            </form>
        </div>
    </div>
</div>