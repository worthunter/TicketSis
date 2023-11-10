<div id="ModCli" class="modal fade" data-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>
                </button>
                <h4 class="modal-title" id="mdltitulo">Nuevo cliente</h4>
            </div>
            <form method="post">
                <div class="modal-body container">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="usuario_id" name="usuario_id">
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="nombre">Nombre</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="nombre" name="nombre">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="apellido">Apellidos</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="apellido" name="apellido">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="rfc">RFC</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="rfc" name="rfc">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="empresa">Empresa</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="empresa" name="empresa">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-10 col-form-label" for="correo">Correo Electronico</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="email" class="form-control form-control-sm" id="correo" name="correo">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="telefono">Telefono</label>  
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="telefono" name="telefono">
                                </div>
                            </div>  <!-- AQUÍ HACEMOS LA DIVISIÓN -->
                        </div>

                        <div class="col">
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="extension">EXT</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="extension" name="extension">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="entidad">Entidad</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="entidad" id="entidad" >
                                        <option>Selecciona una opción</option>
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
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="municipio">Municipio</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="municipio" name="municipio">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="localidad">Localidad</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="localidad" name="localidad">
                                </div>
                            </div>
                            <div class="">
                                <label class="col-sm-2 col-form-label" for="direccion">Direccion</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="direccion" name="direccion">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-secondary btn-sm float-left" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="action" id="#" value="" class="btn btn-rounded btn-success btn-sm">Guardar</button>
                </div>
            </form>
        </div>
	</div>
</div>