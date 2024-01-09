<div class="container-fluid">
    <form id="frmModProduct" action="{{ route('products.update', $data->id) }}">
    <div class="row mb-3">
        @csrf            
        @method('PUT')            
        <div class="col-md-2 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="code">Código</label>
                <input type="text" class="form-control" id="code" name="code" required="" value="{{ $data->code }}">
            </div>
        </div>
        <div class="col-md-2 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="lot">Lote</label>
                <input type="text" class="form-control" id="lot" name="lot" required="" value="{{ $data->lot }}">
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required="" value="{{ $data->name }}">
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="product_type_id">Tipo</label>
                <select name="product_type_id" id="product_type_id" class="form-select">
                    <option selected>Seleccione tipo de producto</option>
                    @foreach ($types as $type)
                    @if($type->id == $data->product_type_id)
                    <option value="{{ $type->id }}" selected>{{ $type->type }}</option>
                    @else
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endif
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
                    @if($deposit->id == $data->deposit_id)
                    <option value="{{ $deposit->id }}" selected>{{ $deposit->description }}</option>
                    @else
                    <option value="{{ $deposit->id }}">{{ $deposit->description }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="price">Precio</label>
                <input type="text" class="form-control" id="price" name="price" required="" value="{{ $data->price }}">
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="form-group label-floating">
                <label class="control-label" for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required="" value="{{ $data->stock }}">
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="form-group label-floating">
                <label class="control-label" for="genetic_id">Genética</label>
                <select name="genetic_id" id="genetic_id" class="form-select">
                    <option selected>Seleccione genética</option>
                    @foreach ($genetics as $genetic)
                    @if($genetic->id == $data->genetic_id)
                    <option value="{{ $genetic->id }}" selected>{{ $genetic->description }}</option>
                    @else                    
                    <option value="{{ $genetic->id }}">{{ $genetic->description }}</option>
                    @endif
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
                    @if($breeder->id == $data->breeder_id)
                    <option value="{{ $breeder->id }}" selected>{{ $breeder->name }}</option>
                    @else               
                    <option value="{{ $breeder->id }}">{{ $breeder->name }}</option>  
                    @endif   
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </form>
</div>