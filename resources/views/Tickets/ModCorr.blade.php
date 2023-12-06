<div id="ModCorr" class="modal fade" data-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>
                </button>
                <h4 class="modal-title">Nuevo Ticket (Correctivo)</h4>
            </div>
            <form action="{{ route('tickets.store') }}" method="post">
                @csrf
                <div class="modal-body container">
                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1">Datos generales</h4>
                    </div>
                    <div class="row">
                        <div class="col">

                            <div class="{{ $errors->has('cliente_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="cliente_id">Cliente</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="cliente_id" id="cliente_id" >
                                        <option>Selecciona una opción</option>
                                        <hr>
                                        <option value="1">Carlos Chevayle</option>
                                        <option value="2">José Castañeda</option>
                                        <option value="3">Fernando Chavez</option>
                                        <option value="4">Gabriel Huerta</option>
                                        <option value="5">Pablo Duarte</option>
                                    </select>
                                </div>
                                @if ($errors->has('cliente_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cliente_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('agente_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="agente_id">Agente</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="agente_id" id="agente_id" >
                                        <option>Selecciona una opción</option>
                                        <hr>
                                        <option value="1">Carlos Chevayle</option>
                                        <option value="2">José Castañeda</option>
                                        <option value="3">Fernando Chavez</option>
                                        <option value="4">Gabriel Huerta</option>
                                        <option value="5">Pablo Duarte</option>
                                    </select>
                                </div>
                                @if ($errors->has('agente_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agente_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('departamento_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="departamento_id">Departamento</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="departamento_id" id="departamento_id" >
                                        <option>Selecciona una opción</option>
                                        <option value="1">Soporte</option>
                                        <option value="2">Administración</option>
                                        <option value="3">Ventas</option>
                                        <option value="4">Contabilidad</option>
                                        <option value="5">Marketing</option>
                                        <option value="6">Desarrollo</option>
                                    </select>
                                </div>

                                @if ($errors->has('departamento_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('categoria_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="categoria_id">Categoría</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="categoria_id" id="categoria_id" >
                                        <option value="2">Correctivo</option>
                                    </select>
                                </div>

                                @if ($errors->has('categoria_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoria_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('subestados_id') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="subestados_id">Subestados</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="subestados_id" id="subestados_id" >
                                        <option>Selecciona una opción</option>
                                        <hr>
                                        <option value="1">Recibido</option>
                                        <option value="2">En espera de diagnóstico</option>
                                        <option value="3">En espera de cotización</option>
                                        <option value="4">En espera de autorizacion del cliente</option>
                                        <option value="5">En espera de Refacciones</option>
                                        <option value="6">Realizado si entregar</option>
                                        <option value="7">Entregado</option>
                                        <option value="8">Entregado sin facturar</option>
                                        <option value="9">En garantia</option>
                                    </select>
                                </div>
                                @if ($errors->has('subestados_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subestados_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="{{ $errors->has('titulo') ? ' has-error' : ''}}">
                                <label class="col-sm-12 col-form-label" for="titulo">Título</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="titulo" name="titulo">
                                </div>

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('prioridad') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="prioridad">Prioridad</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="prioridad" id="prioridad" >
                                        <option>Selecciona una opción</option>
                                        <hr>
                                        <option value="Alta">Alta</option>
                                        <option value="Media">Media</option>
                                        <option value="Baja">Baja</option>
                                    </select>
                                </div>
                                @if ($errors->has('prioridad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prioridad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('estado') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="estado">Estado</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="estado" id="estado" >
                                        <option>Selecciona una opción</option>
                                        <hr>
                                        <option value="Abierto">Abierto</option>
                                        <option value="Cerrado">Cerrado</option>
                                    </select>
                                </div>
                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('fecha_asig') ? ' has-error' : ''}}">
                                <label class="col-md-12 col-form-label" for="fecha_asig">Fecha de asignación</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="date" id="fecha_asig" name="fecha_asig" class="form-control form-control-sm datepicker">
                                </div>

                                @if ($errors->has('fecha_asig'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_asig') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="pb-3 {{ $errors->has('vencimiento') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="vencimiento">Vencimiento</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="date" id="vencimiento" name="vencimiento" class="form-control form-control-sm datepicker">
                                </div>

                                @if ($errors->has('vencimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vencimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1">Datos específicos</h4>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="{{ $errors->has('corr_tipo') ? ' has-error' : ''}}">
                                <label class="col-md-12 col-form-label" for="corr_tipo">Tipo de equipo</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="corr_tipo" name="corr_tipo">
                                </div>

                                @if ($errors->has('corr_tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corr_tipo') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('corr_marca') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="corr_marca">Marca</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="corr_marca" name="corr_marca">
                                </div>

                                @if ($errors->has('corr_marca'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corr_marca') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('corr_modelo') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="corr_modelo">Modelo</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="corr_modelo" name="corr_modelo">
                                </div>

                                @if ($errors->has('corr_modelo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corr_modelo') }}</strong>
                                    </span>
                                @endif
                            </div>                            

                            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="descripcion">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea style="border-color: rgba(107, 107, 107, 0.527)" name="descripcion" id="descripcion" cols="35" rows="3"></textarea>
                                </div>
    
                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="{{ $errors->has('corr_serie') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="corr_serie">Serie</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="corr_serie" name="corr_serie">
                                </div>

                                @if ($errors->has('corr_serie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corr_serie') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('garantia') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="garantia">Garantía</label>
                                <div class="col-sm-12">
                                    <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="garantia" id="garantia" >
                                        <option>Selecciona una opción</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                @if ($errors->has('garantia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('garantia') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('corr_requiere') ? ' has-error' : ''}}">
                                <label class="col-md-12 col-form-label" for="corr_requiere">Herramienta que requiere</label>
                                <div class="col-sm-12">
                                    <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="corr_requiere" name="corr_requiere">
                                </div>

                                @if ($errors->has('corr_requiere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corr_requiere') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('notas') ? ' has-error' : ''}}">
                                <label class="col-sm-2 col-form-label" for="notas">Notas</label>
                                <div class="col-sm-12">
                                    <textarea style="border-color: rgba(107, 107, 107, 0.527)" name="notas" id="notas" cols="35" rows="3"></textarea>
                                </div>
    
                                @if ($errors->has('notas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-secondary btn-sm float-left" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-rounded btn-success btn-sm">Guardar</button>
                </div>
            </form>
        </div>
	</div>
</div>