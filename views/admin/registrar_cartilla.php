<div class="card">
    <div class="card-header">
        Crear Cartilla
    </div>
    <div class="card-body">
        <form id="formCartilla">
            <input type="hidden" id="id_cartilla" name="id_cartilla" value="">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleForm2">N° de Placa</label>
                        <input type="text" id="placa" name="placa" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleForm2">N° de Autorizacion de Servicio</label>
                        <input type="text" id="autorizacion" name="autorizacion" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleForm2">Nombre de la Persona Autorizada</label>
                        <input type="text" id="persona" name="persona" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleForm2">RUC N°</label>
                        <input type="number" id="ruc" name="ruc" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleForm2">N° de la Tarjeta Unica de Circulación</label>
                        <input type="text" id="tarjeta" name="tarjeta" class="form-control">
                    </div>
                </div>
            </div>
            <input type="hidden" id="imagen_cartilla" name="imagen_cartilla" value="">
            <hr>
            <h3>Datos del Conductor</h3>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleForm2">DNI N°</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="dni" name="dni" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-md btn-info m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Validar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleForm2">Nombres</label>
                        <input type="text" id="nombres" name="nombres" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleForm2">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control">
                    </div>
                </div>
            </div>

            <div id="contenido-foto">
            </div>

            <h5>Subir foto de Conductor</h5>
            <div class="custom-file ">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                <input type="file" class="custom-file-input" name="imagen_conductor" id="imagen_conductor" lang="es">
            </div>
            <hr>
            <div class="row pb-3">
                <div class="col-lg-4">
                    <label for="exampleForm2">Fecha</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
            </div>

            <div id="alertita">
            </div>

            <div class="text-center mt-3">
                <button type="button" class="btn btn-deep-purple" id="limpiar">Limpiar</button>
                <button type="button" class="btn btn-danger" id="crear_cartilla">Vista Previa</button>
                <button type="submit" class="btn btn-info" id="confirmar_datos">Confirmar Datos</button>
            </div>
        </form>
    </div>