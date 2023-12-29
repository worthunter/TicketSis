<div id="ModAct" class="modal fade" data-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>
                </button>
                <h4 class="modal-title">Actualización de contraseña</h4>
            </div>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body container">

                    <div class="{{ $errors->has('update_password_current_password') ? ' has-error' : ''}}">
                        <label class="col-sm-12 col-form-label" for="update_password_current_password">Contraseña actual</label>
                        <div class="col-sm-12">
                            <input style="border-color: rgba(107, 107, 107, 0.527)" id="update_password_current_password" name="current_password" type="password" class="form-control form-control-sm">
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <hr>

                    <div class="{{ $errors->has('update_password_password') ? ' has-error' : ''}}">
                        <label class="col-sm-12 col-form-label" for="update_password_password">Nueva contraseña</label>
                        <div class="col-sm-12">
                            <input style="border-color: rgba(107, 107, 107, 0.527)" type="password" class="form-control form-control-sm" id="update_password_password" name="password">
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div class="{{ $errors->has('update_password_password_confirmation') ? ' has-error' : ''}}">
                        <label class="col-sm-12 col-form-label" for="update_password_password_confirmation">Confirma contraseña</label>
                        <div class="col-sm-12">
                            <input style="border-color: rgba(107, 107, 107, 0.527)" type="password" class="form-control form-control-sm" id="update_password_password_confirmation" name="password_confirmation">
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
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