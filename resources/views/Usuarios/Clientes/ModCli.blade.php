<div id="ModCli" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <h4 class="modal-title" id="mdltitulo">Nuevo cliente</h4>
            </div>
            <form method="post" id="usuario_form">
                <div class="modal-body">
                    <input type="hidden" id="id_usuarios" name="id_usuarios">
                    <div class="form-group row">
                        <label class="col-sm-2 col-col-sm-2 col-form-label" for="nom_usu">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_usu" name="nom_usu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-col-sm-2 col-form-label" for="ape_usu">Apellido</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ape_usu" name="ape_usu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="correo_usu">Correo Electronico</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="correo_usu" name="correo_usu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="telefono_usu">Telefono</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_usu" name="telefono_usu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="extencion">EXT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="extencion" name="extencion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="entidad">Entidad</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="entidad" id="entidad" >
                                <option value="aguascalientes">Aguascalientes</option>
                                <option value="baja-california">Baja California</option>
                                <option value="baja-california-sur">Baja California Sur</option>
                                <option value="campeche">Campeche</option>
                                <option value="chiapas">Chiapas</option>
                                <option value="chihuahua">Chihuahua</option>
                                <option value="ciudad-de-mexico">Ciudad de México</option>
                                <option value="cuahuila">Coahuila</option>
                                <option value="colima">Colima</option>
                                <option value="durando">Durango</option>
                                <option value="estado-de-mexico">Estado de México</option>
                                <option value="guanajuato">Guanajuato</option>
                                <option value="guerrero">Guerrero</option>
                                <option value="hidalgo">Hidalgo</option>
                                <option value="jalisco">Jalisco</option>
                                <option value="michoacan">Michoacán</option>
                                <option value="morelos">Morelos</option>
                                <option value="nayarit">Nayarit</option>
                                <option value="nuevo-leon">Nuevo León</option>
                                <option value="oaxaca">Oaxaca</option>
                                <option value="puebla">Puebla</option>
                                <option value="queretaro">Querétaro</option>
                                <option value="quintana-roo">Quintana Roo</option>
                                <option value="san-luis-potosi">San Luis Potosí</option>
                                <option value="sinaloa">Sinaloa</option>
                                <option value="sonora">Sonora</option>
                                <option value="tabasco">Tabasco</option>
                                <option value="tamaulipas">Tamaulipas</option>
                                <option value="tlaxcala">Tlaxcala</option>
                                <option value="veracruz">Veracruz</option>
                                <option value="yucatan">Yucatán</option>
                                <option value="zacatecas">Zacatecas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="municipio">Municipio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="municipio" name="municipio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="localidad">Localidad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="localidad" name="localidad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="direccion">Direccion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="direccion">Código Postal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="zona_horaria">Zona horaria</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="zona_horaria" id="zona_horaria">
                                <option value="zona-pacífico">Zona Pacífico</option>
                                <option value="zona-montaña">Zona Montaña</option>
                                <option value="zona-centro">Zona Centro</option>
                                <option value="zona-este">Zona Este</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-secondary btn-sm float-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-success btn-sm">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>