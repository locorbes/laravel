@include('head')
@include('nav')
<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="h-100 p-3 text-dark bg-light border rounded-3">
                    <div class="row justify-content-center">                        
                        <div class="col-md-3">
                            <div class="mb-3">                                
                                <div class="h-100 p-3 py-5 text-dark bg-light border rounded-3">
                                    <h5 class="mb-2">DATOS USUARIO</h5>
                                    <div class="text-center mb-3">
                                        <i class="fa fa-user-circle fa-5x text-success" aria-hidden="true"></i>
                                    </div>
                                    <form id="frmModUser">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input style="border: 0px;" id="modUserName" name="modUserName" type="text" class="text-center bg-transparent form-control rounded-0" value="{{ $name }}" placeholder="Nombre" required="true">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input style="border: 0px;" id="modUserEmail" name="modUserEmail" type="email" class="text-center bg-transparent form-control rounded-0" value="{{ $email }}" placeholder="E-mail" required="true">
                                            </div>
                                        </div>
                                        <div class="mb-3">                                        
                                            <div class="input-group">
                                                <input style="border: 0px;" id="modUserPassword" name="modUserPassword" type="password" class="text-center bg-transparent form-control rounded-0" value="" placeholder="Clave (mínimo 8 caracteres)" required="true">
                                            </div>
                                        </div>
                                        <button type="button" id="btnModUser" class="btn btn-success mt-3 w-100" data-url="{{ route('users.update', $id) }}" data-token="{{ csrf_token() }}">EDITAR USUARIO</button>
                                    </form>
                                </div>
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