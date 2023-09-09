<!-- Modal -->
<div id="modal" class="modal fade basicModalLG" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">

            <form method="POST" id="producto_form">
                <div class="modal-header bg-primary" id="cabecera">
                    <h5 id="tituloModal" class="modal-title text-white"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">
                
                        <div class="form-group">
                            <label>Nombre del Producto :</label>
                            <input type="text" class="form-control" id="prod_nom" name="prod_nom" required>
                        </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label>Precio :</label>
                            <input type="text" class="form-control" id="prod_precion" name="prod_precion" required>
                        </div>

                        <div class="form-group col-6">
                            <label>Precio - Dsct :</label>
                            <input type="text" class="form-control" id="prod_preciod" name="prod_preciod" required>
                        </div>
                    </div><!-- End Row -->

                    
                    <div class="form-group">
                        <label>Ruta Imagen :</label>
                        <input type="text" class="form-control" id="prod_img" name="prod_img" required>
                    </div>

                    <div class="row">
                    <div class="form-group col-3">
                            <label>Cupón :</label>
                            <input type="text" class="form-control" id="prod_cupon" name="prod_cupon" required>
                    </div>

                    <div class="form-group col-9">
                        <label>Url :</label>
                        <input type="text" class="form-control" id="prod_url" name="prod_url" required>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>Descripción :</label>
                        <textarea class="form-control" id="prod_descripcion" name="prod_descripcion" rows="3" required></textarea>
                    </div>

                </div><!-- End Modal-Body -->

                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="add" class="btn btn-success">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>