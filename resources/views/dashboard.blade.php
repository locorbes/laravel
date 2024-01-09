@include('head')
@include('nav')
<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="container-fluid py-3">
            <h1 class="display-6 fw-bold">BIENVENIDO USUARIO {{ $name }}</h1>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="h-100 p-3 text-dark bg-light border rounded-3">
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <h2>PERMISOS DEL USUARIO</h2>
                        </div>
                    </div>
                    <div class="row align-items-md-stretch">
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">PERMISOS DE ESCRITURA</h5>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">PERMISOS DE LECTURA</h5>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">PERMISOS ESPECIALES</h5>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Permiso 123</h5>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">                                
                                <div class="h-100 py-5 text-dark bg-light border rounded-3">
                                    <h5 class="mb-2">DATOS USUARIO</h5>
                                    <div class="text-center mb-3">
                                        <i class="fa fa-user-circle fa-5x text-success" aria-hidden="true"></i>
                                    </div>
                                    <p>Nombre: {{ $name }}</p>
                                    <p>E-mail: {{ $email }}</p>
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