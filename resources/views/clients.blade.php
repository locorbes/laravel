@include('head')
@include('nav')

<div class="modal fade" id="mdlAddClient" tabindex="-1" aria-labelledby="Agregar cliente" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form id="frmAddClient" method="POST" action="{{ route('clients.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                                    Información personal
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                                    Información de Contacto
                                                </button>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row user-block mt-4">
                                                    <input name="company_id" type="hidden" value="1">
                                                    <div class="row">
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="full_name">Nombre completo</label>
                                                                <input type="text" class="form-control" id="full_name" name="full_name" required="" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="dni">DNI</label>
                                                                <input type="text" class="form-control" id="dni" name="dni" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="business_name">Razón Social</label>
                                                                <input type="text" class="form-control" id="business_name" name="business_name" required="" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="cuit">CUIT</label>
                                                                <input type="text" class="form-control" id="cuit" name="cuit" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="email">E-mail</label>
                                                                <input type="text" class="form-control" id="email" name="email" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="occupation">Ocupación</label>
                                                                <input type="text" class="form-control" id="occupation" name="occupation" required="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-3">
                                                            <div class="form-group label-floating text-center">
                                                                <label class="control-label" for="">Trabaja actualmente</label>
                                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="currently_working" id="is_working1" value="1" autocomplete="off">
                                                                    <label class="btn btn-outline-success" for="is_working1">SI</label>
                                                                    <input type="radio" class="btn-check" name="currently_working" value="0" id="is_working2" autocomplete="off" checked="">
                                                                    <label class="btn btn-outline-success" for="is_working2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-3">
                                                            <div class="form-group label-floating text-center">
                                                                <label class="control-label" for="">Aplica para moto</label>
                                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="apply_for_motorbike" id="applies_moto1" value="1" autocomplete="off">
                                                                    <label class="btn btn-outline-success" for="applies_moto1">SI</label>
                                                                    <input type="radio" class="btn-check" name="apply_for_motorbike" value="0" id="applies_moto2" autocomplete="off" checked="">
                                                                    <label class="btn btn-outline-success" for="applies_moto2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="image_dni">Imagen DNI</label><br>
                                                                <input type="file" class="form-control" id="image_dni" name="image_dni">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="image_service">Imagen De Servicio</label><br>
                                                                <input type="file" class="form-control" id="image_service" name="image_service">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" for="receipt_payment">Recibo De Pago</label><br>
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
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row user-block mt-4" id="phones-form-edit">
                                                    <h5>TELÉFONOS</h5>
                                                        <div class="row mt-1">
                                                            <div class="col-md-4">
                                                                <input class="form-control" placeholder="Teléfono" multiple="" name="phone1[]" type="text">
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <input class="form-control" placeholder="Descripción" multiple="" name="desc_phone[]" type="text" >
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
                                                                <label for="Localidad">Localidad</label>
                                                                <input class="form-control" name="city" type="text">
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <label for="Código Postal">Código Postal</label> <br>
                                                                <input class="form-control" name="postal_code" type="text">
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <label for="Barrio">Barrio</label>
                                                                <input class="form-control" name="neighborhood" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4 ">
                                                                <label for="between_street">Entrecalle</label>
                                                                <input class="form-control" id="between_street" name="between_street" type="text">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="coordinates">Coordenadas</label>
                                                                <input class="form-control" id="coordinates" name="coordinates" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <label for="Dirección">Dirección</label>
                                                                <input class="form-control" name="address" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="previous_address">Dirección Anterior:</label>
                                                                <input class="form-control" id="previous_address" name="previous_address" type="text">
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

                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" id="btnAddClient" class="btn btn-success">AGREGAR</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlModClient" tabindex="-1" aria-labelledby="Modificar cliente" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row" id="rowFrmModClient">

                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" id="btnModClient" class="btn btn-success">MODIFICAR</button>
        </div>
    </div>
  </div>
</div>

<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-12 mx-3 p-3 text-dark bg-light rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8 py-3 text-dark bg-light">
                            <div class="text-start">
                                <button class="mb-1 btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mdlAddClient">REGISTRAR CLIENTE</button>
                                <button class="mb-1 btn btn-sm btn-success">TIPO DE CLIENTES</button>
                            </div>
                        </div>
                        <div class="col-md-2 ml-auto text-dark bg-light">                    
                            <div class="input-group">
                                <input type="text" id="btnSearch" class="form-control" placeholder="Buscar">
                                <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example" class="mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                    <a class="page-link bg-dark text-light" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-dark text-light" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link bg-dark text-light" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link bg-dark text-light" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link bg-dark text-light" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-3 py-3 text-dark bg-light border rounded-3 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NOMBRE COMPLETO</th>
                                        <th>DNI</th>
                                        <th>RAZÓN SOCIAL</th>
                                        <th>CUIT</th>
                                        <th>DIRECCIÓN</th>
                                        <th>CONTACTO</th>
                                        <th>CONDICIÓN</th>
                                        <th>TIPO DE PAGO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($clients->count() > 0)
                                    @foreach ($clients as $client)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->full_name }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->dni }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->business_name }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->cuit }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->address }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $client->email }}
                                            </div>
                                        </td>
                                        <td class="text-white bg-success align-middle">
                                            <div class="d-block text-center w-100">
                                                NUEVO CLIENTE
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                TARJETA
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="mdlModClient btn btn-sm btn-success" data-bs-toggle="tooltip" data-placement="top" title="MODIFICAR"  data-url="{{ route('/dashboard/clients/', $client->id) }}">
                                                <span data-bs-toggle="modal" data-bs-target="#mdlModClient">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </span>
                                            </button>
                                            <button class="btnDelUser btn btn-sm btn-dark" data-url="{{ route('clients.delete', $client->id) }}" data-token="{{ csrf_token() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="ELIMINAR"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr><td colspan='9'>NO SE ENCONTRARON CLIENTES</td></tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  </div>
</main>
@include('footer')