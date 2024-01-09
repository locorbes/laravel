@include('head')
@include('nav')

<div class="modal fade" id="mdlAddProduct" tabindex="-1" aria-labelledby="Agregar productos" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <form id="frmAddProduct" action="{{ route('products.create') }}">
                <div class="row mb-3">
                    @csrf                        
                    <div class="col-md-2 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="code">Código</label>
                            <input type="text" class="form-control" id="code" name="code" required="" value="">
                        </div>
                    </div>
                    <div class="col-md-2 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="lot">Lote</label>
                            <input type="text" class="form-control" id="lot" name="lot" required="" value="">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required="" value="">
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="product_type_id">Tipo</label>
                            <select name="product_type_id" id="product_type_id" class="form-select">
                                <option selected>Seleccione tipo de producto</option>
                                @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="deposit_id">Depositos</label>
                            <select name="deposit_id" id="deposit_id" class="form-select">
                                <option selected>Seleccione depósito</option>
                                @foreach ($deposits as $deposit)
                                <option value="{{ $deposit->id }}">{{ $deposit->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="price">Precio</label>
                            <input type="text" class="form-control" id="price" name="price" required="" value="">
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required="" value="">
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="genetic_id">Genética</label>
                            <select name="genetic_id" id="genetic_id" class="form-select">
                                <option selected>Seleccione genética</option>
                                @foreach ($genetics as $genetic)
                                <option value="{{ $genetic->id }}">{{ $genetic->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group label-floating">
                            <label class="control-label" for="breeder_id">Criadores</label>
                            <select name="breeder_id" id="breeder_id" class="form-select">
                                <option selected>Seleccione criador</option>
                                @foreach ($breeders as $breeder)
                                <option value="{{ $breeder->id }}">{{ $breeder->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>        
        <div class="modal-footer justify-content-center">
            <button class="btn btn-success" type="button" id="btnAddProduct">AGREGAR</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlModProduct" tabindex="-1" aria-labelledby="Modificar roductos" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row" id="rowFrmModProduct">
            </div>            
        </div>        
        <div class="modal-footer justify-content-center">
            <button class="btn btn-success" type="button" id="btnModProduct">MODIFICAR</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlDeposit" tabindex="-1" aria-labelledby="Depósitos" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Depósitos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <form id="frmAddDeposit" action="{{ route('deposits.create') }}" class="input-group mb-3">
                        @csrf
                        <input type="text" name="description" class="form-control" placeholder="Descripción de depósito" aria-label="Descripción de depósito" aria-describedby="btnAddDeposit">
                        <button class="btn btn-success" type="button" id="btnAddDeposit">AGREGAR</button>
                    </form>
                </div>
                <div class="row">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>DESCRIPCION</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($deposits->count() > 0)
                            @foreach ($deposits as $deposit)
                            <tr>
                                <td class="align-middle">
                                    <div class="d-block w-100">
                                        {{ $deposit->id }}
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-block w-100">
                                        <input style="border: 0px;" id="modDescription-{{ $deposit->id }}" name="description" type="text" class="form-control bg-transparent text-center rounded-0" value="{{ $deposit->description }}" placeholder="Descripción del depósito" required="true">
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btnModDeposit btn btn-sm btn-success" data-bs-toggle="tooltip" data-placement="top" title="MODIFICAR" data-id="{{ $deposit->id }}" data-url="{{ route('deposits.update', $deposit->id) }}" data-token="{{ csrf_token() }}">
                                        <span>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <button class="btnDelDeposit btn btn-sm btn-dark" data-url="{{ route('deposits.delete', $deposit->id) }}" data-token="{{ csrf_token() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="ELIMINAR"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td class="text-center" colspan="3">NO SE ENCONTRARON DEPÓSITOS</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
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
                                <button class="mb-1 btn btn-sm btn-success rounded-0" data-bs-toggle="modal" data-bs-target="#mdlAddProduct">NUEVO PRODUCTO</button>
                                <button class="mb-1 btn btn-sm btn-success rounded-0" data-bs-toggle="modal" data-bs-target="#mdlDeposit">DEPÓSITOS</button>
                                <button class="mb-1 btn btn-sm btn-success rounded-0">CICLO DE VIDA</button>
                                <button class="mb-1 btn btn-sm btn-success rounded-0">MODIFICACIÓN MASIVA</button>
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
                                        <th>CÓDIGO</th>
                                        <th>LOTE</th>
                                        <th>NOMBRE</th>
                                        <th>CRIADOR</th>
                                        <th>PRECIO</th>
                                        <th>STOCK</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($products->count() > 0)
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->code }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->lot }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->name }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->breeder->name }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->price }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-block w-100">
                                                {{ $product->stock }}
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="mdlModProduct btn btn-sm btn-success" data-bs-toggle="tooltip" data-placement="top" title="MODIFICAR"  data-url="{{ route('/dashboard/products/', $product->id) }}">
                                                <span data-bs-toggle="modal" data-bs-target="#mdlModProduct">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </span>
                                            </button>
                                            <button class="btnDelUser btn btn-sm btn-dark" data-url="{{ route('products.delete', $product->id) }}" data-token="{{ csrf_token() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="ELIMINAR"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr><td colspan='7'>NO SE ENCONTRARON PRODUCTOS</td></tr>
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