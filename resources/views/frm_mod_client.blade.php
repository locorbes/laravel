<div class="col-md-12">
    <form id="frmModClient" method="POST" action="{{ route('clients.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-mod-tab" data-bs-toggle="tab" data-bs-target="#home-mod" type="button" role="tab" aria-controls="home" aria-selected="true">
                                Información personal
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-mod-tab" data-bs-toggle="tab" data-bs-target="#profile-mod" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Información de Contacto
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-mod" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row user-block mt-4">
                                <input name="company_id" type="hidden" value="1">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="mod_full_name">Nombre completo</label>
                                            <input type="text" class="form-control" id="mod_full_name" name="full_name" required="" value="{{ $data->full_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="mod_dni">DNI</label>
                                            <input type="text" class="form-control" id="mod_dni" name="dni" required="" value="{{ $data->dni }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="mod_business_name">Razón Social</label>
                                            <input type="text" class="form-control" id="mod_business_name" name="business_name" required="" value="{{ $data->business_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" label="mod_cuit">CUIT</label>
                                            <input type="text" class="form-control" id="mod_cuit" name="cuit" required="" value="{{ $data->cuit }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="mod_email">E-mail</label>
                                            <input type="text" class="form-control" id="mod_email" name="email" required="" value="{{ $data->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="mod_occupation">Ocupación</label>
                                            <input type="text" class="form-control" id="mod_occupation" name="occupation" required="" value="{{ $data->occupation }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="form-group label-floating text-center">
                                            <label class="control-label">Trabaja actualmente</label>
                                            @if ($data->currently_working == 0)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="currently_working" id="mod_is_working1" value="1" autocomplete="off">
                                                <label class="btn btn-outline-success" for="mod_is_working1">SI</label>
                                                <input type="radio" class="btn-check" name="currently_working" value="0" id="mod_is_working2" autocomplete="off" checked="">
                                                <label class="btn btn-outline-success" for="mod_is_working2">NO</label>
                                            </div>
                                            @else
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="currently_working" id="mod_is_working1" value="1" autocomplete="off" checked="">
                                                <label class="btn btn-outline-success" for="mod_is_working1">SI</label>
                                                <input type="radio" class="btn-check" name="currently_working" value="0" id="mod_is_working2" autocomplete="off">
                                                <label class="btn btn-outline-success" for="mod_is_working2">NO</label>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="form-group label-floating text-center">
                                            <label class="control-label">Aplica para moto</label>
                                            @if ($data->apply_for_motorbike == 0)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="apply_for_motorbike" id="mod_applies_moto1" value="1" autocomplete="off">
                                                <label class="btn btn-outline-success" for="mod_applies_moto1">SI</label>
                                                <input type="radio" class="btn-check" name="apply_for_motorbike" value="0" id="mod_applies_moto2" autocomplete="off" checked="">
                                                <label class="btn btn-outline-success" for="mod_applies_moto2">NO</label>
                                            </div>
                                            @else
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="apply_for_motorbike" id="mod_applies_moto1" value="1" autocomplete="off" checked="">
                                                <label class="btn btn-outline-success" for="mod_applies_moto1">SI</label>
                                                <input type="radio" class="btn-check" name="apply_for_motorbike" value="0" id="mod_applies_moto2" autocomplete="off">
                                                <label class="btn btn-outline-success" for="mod_applies_moto2">NO</label>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen DNI</label><br>
                                            <input type="file" class="form-control" id="image_dni" name="image_dni">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen De Servicio</label><br>
                                            <input type="file" class="form-control" id="image_service" name="image_service">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Recibo De Pago</label><br>
                                            <input type="file" class="form-control" id="receipt_payment" name="receipt_payment">
                                        </div>
                                    </div>
                                    <!--div class="col-md-12 mt-3" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5><strong>Información laboral o de la empresa</strong></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="Nombre">Nombre</label>
                                                    <input class="form-control" name="enterprise[name]" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="CUIT">CUIT</label>
                                                    <input class="form-control" name="enterprise[cuit]" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input class="form-control" name="enterprise[email]" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="Localidad">Localidad</label>
                                                    <input class="form-control" name="enterprise[location]" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="Código Postal">Código Postal</label>
                                                    <input class="form-control" name="enterprise[postal_code]" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label for="Barrio">Barrio</label>
                                                    <input class="form-control" name="enterprise[district]" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <label for="Entrecalle">Entrecalle</label>
                                                <input class="form-control" name="enterprise[between_street]" type="text" value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Coordenadas">Coordenadas</label>
                                                <input class="form-control" name="enterprise[coordinates]" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-2">
                                                <label>Teléfonos</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Teléfono" name="enterprise[phone1]" type="text" value="">

                                                </div>
                                            </div>

                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Teléfono" name="enterprise[phone2]" type="text" value="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label for="Dirección">Dirección</label>
                                                    <input class="form-control" name="enterprise[address]" type="text" value="">

                                                </div>
                                            </div>
                                        </div>
                                    </div-->

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-mod" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row user-block mt-4" id="phones-form-edit">
                                <h5>TELÉFONOS</h5>
                                    <div class="row mt-1">
                                        <div class="col-md-4">
                                            <input class="form-control" placeholder="Teléfono" multiple="" name="phone1[]" type="text" value="">
                                        </div>
                                        <div class="col-md-4 ">
                                            <input class="form-control" placeholder="Descripción" multiple="" name="desc_phone[]" type="text" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" title="Agregar nuevo número telefonico" onclick="agregarTelefonoEdicion()">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            <div class="row user-block mt-4">
                                <h5>DIRECCIÓN</h5>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <label for="mod_city">Localidad</label>
                                            <input class="form-control" id="mod_city" name="city" type="text" value="{{ $data->city }}">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="mod_postal_code">Código Postal</label> <br>
                                            <input class="form-control" id="mod_postal_code" name="postal_code" type="text" value="{{ $data->postal_code }}">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="mod_neighborhood">Barrio</label>
                                            <input class="form-control" id="mod_neighborhood" name="neighborhood" type="text" value="{{ $data->neighborhood }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <label for="mod_between_street">Entrecalle</label>
                                            <input class="form-control" id="mod_between_street" name="between_street" type="text" value="{{ $data->between_streets }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="mod_coordinates">Coordenadas</label>
                                            <input class="form-control" id="mod_coordinates" name="coordinates" type="text" value="{{ $data->coordinates }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <label for="mod_address">Dirección</label>
                                            <input class="form-control" id="mod_address" name="address" type="text" value="{{ $data->address }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mod_previous_address">Dirección Anterior:</label>
                                            <input class="form-control" id="mod_previous_address" name="previous_address" type="text" value="{{ $data->previous_address }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>