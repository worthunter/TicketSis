<div id="ModAge" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg" style="font-size: 1.3rem; color:rgb(0, 0, 0);"></i>
                </button>
                <h4 class="modal-title">Nuevo agente</h4>
            </div>
            <form action="{{ route('agentes.store')}}" method="post">
                @csrf
                <div class="modal-body container">
                    <div class="row">
                        <div class="col">

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="nombre">Nombre</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="nombre" name="nombre">
                                </div>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="apellido">Apellido</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="apellido" name="apellido">
                                </div>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="rfc">RFC</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="rfc" name="rfc">
                                </div>

                                @if ($errors->has('rfc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rfc') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('correo') ? ' has-error' : ''}}">
                                <label class="col-sm-12 col-form-label" for="correo">Correo electrónico</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="correo" name="correo">
                                </div>

                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="telefono">Teléfono</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="telefono" name="telefono">
                                </div>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('departamento') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="departamento">Departamento</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="departamento" id="departamento" >
                                        <option value="Soporte">Soporte</option>
                                        <option value="Ventas">Ventas</option>
                                        <option value="Administración">Administración</option>
                                    </select>
                                </div>

                                @if ($errors->has('departamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group{{ $errors->has('extension') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="extension">Extensión</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="extension" name="extension">
                                </div>

                                @if ($errors->has('extension'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('extension') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('entidad') ? ' has-error' : ''}}">
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

                                @if ($errors->has('entidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entidad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('municipio') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="municipio">Municipio</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="municipio" name="municipio">
                                </div>

                                @if ($errors->has('municipio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="direccion">Dirección</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="direccion" name="direccion">
                                </div>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('rol_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="rol_id">Rol</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="rol_id" id="rol_id" >
                                        <option value="4">Agente</option>
                                    </select>
                                </div>

                                @if ($errors->has('rol_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rol_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-secondary btn-sm float-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-rounded btn-success btn-sm">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>