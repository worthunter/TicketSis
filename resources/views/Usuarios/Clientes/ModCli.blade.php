<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="mdltitulo"></h4>
            </div>
            <form method="post" id="usuario_form">
                <div class="modal-body">

                    <input type="hidden" id="id_usuarios" name="id_usuarios">

                    <div class="form-group">
                        <label class="form-label" for="nom_usu">Nombre</label>
                        <input type="text" class="form-control" id="nom_usu" name="nom_usu" placeholder="Ingrese nombre" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ape_usu">Apellido</label>
                        <input type="text" class="form-control" id="ape_usu" name="ape_usu" placeholder="Ingrese apellido" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="correo_usu">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo_usu" name="correo_usu" placeholder="test@test.com" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contra_usu">Contraseña</label>
                        <input type="text" class="form-control" id="contra_usu" name="contra_usu" placeholder="Ingrese una contraseña" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="zona_horaria">Zona horaria</label>
                        <select class="select2" name="zona_horaria" id="zona_horaria">
                            <option value="zona-pacífico">Zona Pacífico</option>
                            <option value="zona-montaña">Zona Montaña</option>
                            <option value="zona-centro">Zona Centro</option>
                            <option value="zona-este">Zona Este</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telefono_usu">Telefono</label>
                        <input type="text" class="form-control" id="telefono_usu" name="telefono_usu" placeholder="Ingrese el numero telefono" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="whatsapp">Whatsapp</label>
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Ingrese el numero telefono" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="extencion">EXT</label>
                        <input type="text" class="form-control" id="extencion" name="extencion" placeholder="Ingrese la extención">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="entidad">Entidad</label>
                        <select class="select2" name="entidad" id="entidad" >
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
                    <div class="form-group">
                        <label class="form-label" for="localidad">Localidad</label>
                        <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Ingrese la localidad" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Ingrese el municipio" >
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