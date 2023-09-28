<div id="modaleditar" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="mdltituloeditar"></h4>
            </div>
            <form method="post" id="editar_form">
                <div class="modal-body">

                    <input type="hidden" id="id_tickets" name="id_tickets">

                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="cat_id">Categoria</label>
                            <select id="cat_id" name="cat_id" class="form-control">
                            </select>
                        </fieldset>
                        <script src="./ConsultarTicket.js"></script>
                    </div>
                    <div class="col-lg-6">
                         <fieldset class="form-group"> 
                            <label class="form-label semibold" for="garantia">Garantia</label>
                            <select type="file" id="garantia" name="garantia" class="form-control">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ticket_titulo">Titulo del ticket</label>
                        <input type="text" class="form-control" id="ticket_titulo" name="ticket_titulo" placeholder="Ingrese el titulo del ticket" required>
                    </div>
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
                        <input type="email" class="form-control" id="correo_usu" name="correo_usu" placeholder="Ingrese el correo" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telefono_usu">Telefono</label>
                        <input type="text" class="form-control" id="telefono_usu" name="telefono_usu" placeholder="Ingrese su numero de telefono" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="entidad">Entidad</label>
                        <input type="text" class="form-control" id="entidad" name="entidad" placeholder="Ingrese su entidad" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="localidad">Localidad</label>
                        <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Ingrese su localidad" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Ingrese su municipio" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ticket_descrip">Descripcion del ticket</label>
                        <input type="text" class="form-control" id="ticket_descrip" name="ticket_descrip" placeholder="Descripción" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="enviar-editar" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
	</div>
</div>