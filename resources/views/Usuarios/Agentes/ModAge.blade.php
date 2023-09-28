
<!-- Modal para nuevo agente -->
<div id="modaltecnicos" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="mdltitulo"></h4>
            </div>
            <form method="post" id="agentes_form">
                <div class="modal-body">

                    <input type="hidden" id="id_usuarios" name="id_usuarios">

                    <div class="form-group">
                        <label class="form-label" for="nom_usu">Nombre</label>
                        <input type="text" class="form-control" id="nom_usu" name="nom_usu" placeholder="Ingrese nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ape_usu">Apellido</label>
                        <input type="text" class="form-control" id="ape_usu" name="ape_usu" placeholder="Ingrese apellido" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="correo_usu">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo_usu" name="correo_usu" placeholder="test@test.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contra_usu">Contraseña</label>
                        <input type="text" class="form-control" id="contra_usu" name="contra_usu" placeholder="Ingrese una contraseña" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="rol_id">Rol</label>
                        <select class="select2" id="rol_id" name="rol_id">
                            <option value="2">Soporte</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
	</div>
</div>