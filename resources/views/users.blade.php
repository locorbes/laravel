@include('head')
@include('nav')
<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-12 mx-3 p-3 text-dark bg-light rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mx-3 p-3 text-dark bg-light border rounded-3 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre de usuario</th>
                                        <th>Correo Electrónico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="input-group w-100">
                                                <input style="border: 0px;" id="modName-{{ $user->id }}" name="name" type="text" class="form-control bg-transparent text-center rounded-0" value="{{ $user->name }}" placeholder="Nombre" required="true">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group w-100">
                                                <input style="border: 0px;" id="modEmail-{{ $user->id }}" name="email" type="email" class="form-control bg-transparent text-center rounded-0" value="{{ $user->email }}" placeholder="E-mail" required="true">
                                            </div></td>
                                        <td>
                                            <button class="btnModUser btn btn-sm btn-success" data-id="{{ $user->id }}" data-url="{{ route('users.update', $user->id) }}" data-token="{{ csrf_token() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="MODIFICAR"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button class="btnDelUser btn btn-sm btn-dark" data-url="{{ route('users.delete', $user->id) }}" data-token="{{ csrf_token() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="ELIMINAR"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2 mx-3 p-3 text-dark bg-light border rounded-3">
                            <div class="mt-4">
                                <h4>NUEVO USUARIO</h4>
                                <form id="frmAddUser" method="POST" action="{{ route('users.create') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text bg-white rounded-0" style="border: 0px;"><i class="fas fa-user" aria-hidden="true"></i></span>
                                            <input style="border: 0px;" name="name" type="text" class="form-control rounded-0" placeholder="Nombre" required="true">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text bg-white rounded-0" style="border: 0px;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input style="border: 0px;" name="email" type="email" class="form-control rounded-0" placeholder="E-mail" required="true">
                                        </div>
                                    </div>
                                    <div class="mb-3">                                        
                                        <div class="input-group">
                                            <span class="input-group-text bg-white rounded-0" style="border: 0px;"><i class="fas fa-lock" aria-hidden="true"></i></span>
                                            <input style="border: 0px;" name="password" type="password" class="form-control rounded-0" placeholder="Clave (mínimo 8 caracteres)" required="true">
                                        </div>
                                    </div>
                                    <button type="button" id="btnAddUser" class="btn btn-success">AGREGAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  </div>
</main>
@include('footer')