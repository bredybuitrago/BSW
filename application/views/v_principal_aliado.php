<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editor de aliado</h3>
                    </div>
                    <div class="card-body">
                        <table id="tabla_canchas" class="table table-bordered table-striped" width="100%"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal para edición de canchas -->
<div class="modal fade" id="mdl_editar_cancha">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar cancha</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">




                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title" id="title_modal">Editar cancha ...</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="form_register_cancha">
                        <div class="row">
                            <div class="col-md-6">
                                <label>local</label>
                                <div class="form-group input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-thumbtack"></i></span>
                                    </div>
                                    <select class="form-control required" id="ddl_locales"></select>                        
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label>Identificación de la cancha</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-caret-square-right"></i></span>
                                    </div>
                                    <input type="text" class="form-control required" id="txt_identificacion" placeholder="Ejemplo... primera, central, fondo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tipo de cancha</label>
                                <div class="form-group input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                    </div>
                                    <select class="form-control required" id="ddl_tipo_cancha"></select>                        
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Tarifa por hora</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control required" id="txt_tarifa_por_hora" placeholder="Tarifa por hora">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" id="txt_observaciones" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cancha_activa"  checked>
                                    <label for="cancha_activa" class="custom-control-label">Cancha activa</label>
                                </div>
                            </div>
                            <input type="hidden" name="hide_cancha_id" id="hide_cancha_id">

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="btn_actualizar_cancha">Guardar Cambios &nbsp;&nbsp;<i class="fas fa-paper-plane fa-fw fa-xl margin-left-lg fa-spin slow-spin"></i></button>
            </div>
        </div>
    </div>
</div>