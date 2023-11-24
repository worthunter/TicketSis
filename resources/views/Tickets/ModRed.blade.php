<div id="ModRed" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg" style="font-size: 1.3rem; color:rgb(0, 0, 0);"></i>
                </button>
                <h4 class="modal-title">Nuevo Ticket (Redes)</h4>
            </div>
            <form action="{{ route('tickets.store')}}" method="post">
                @csrf
                <div class="modal-body container">
                    <div class="">
                        <div class="form-group{{ $errors->has('agente_id') ? ' has-error' : ''}}">
                            <label class="col-sm-2 col-form-label" for="agente_id">Agente</label>
                            <div class="col-sm-12">
                                <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="agente_id" name="agente_id">
                            </div>

                            @if ($errors->has('agente_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('agente_id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : ''}}">
                            <label class="col-sm-2 col-form-label" for="titulo">Título</label>
                            <div class="col-sm-12">
                                <input style="border-color: rgba(107, 107, 107, 0.527)" type="text" class="form-control form-control-sm" id="titulo" name="titulo">
                            </div>

                            @if ($errors->has('titulo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : ''}}">
                            <label class="col-sm-2 col-form-label" for="descripcion">Descripción</label>
                            <div class="col-sm-12">
                                <textarea style="border-color: rgba(107, 107, 107, 0.527)" name="descripcion" id="descripcion" cols="57" rows="3"></textarea>
                            </div>

                            @if ($errors->has('descripcion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : ''}}">
                            <label class="col-sm-2 col-form-label" for="estado">Estado</label>
                            <div class="col-sm-12">
                                <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm" name="estado" id="estado" >
                                    <option value="abierto">Abierto</option>
                                </select>
                            </div>

                            @if ($errors->has('estado'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('notas') ? ' has-error' : ''}}">
                            <label class="col-sm-2 col-form-label" for="notas">Notas</label>
                            <div class="col-sm-12">
                                <textarea style="border-color: rgba(107, 107, 107, 0.527)" name="notas" id="notas" cols="57" rows="3"></textarea>
                            </div>

                            @if ($errors->has('notas'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('notas') }}</strong>
                                </span>
                            @endif
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