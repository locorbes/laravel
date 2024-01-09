@include('head')
@include('nav')
<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="h-100 p-3 text-dark bg-light border rounded-3">
                    <div class="row">
                        <div class="col-md-12 p-3">
                            <h2>Nueva venta</h2>
                        </div>      
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label" for="product_type">Tipo Producto</label>
                                <input type="text" class="form-control form-control-lg" id="product_type" name="product_type" required="" value="">
                            </div>
                        </div>  
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label" for="product">Producto (lote/nombre)</label>
                                <input type="text" class="form-control form-control-lg" id="product" name="product" required="" value="">
                            </div>
                        </div> 
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label" for="client">Cliente</label>
                                <input type="text" class="form-control form-control-lg" id="client" name="client" required="" value="">
                            </div>
                        </div>   
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label" for="seller">Vendedor</label>
                                <input type="text" class="form-control form-control-lg" id="seller" name="seller" required="" value="">
                            </div>
                        </div>                            
                    </div>
                    <div  id="main" class="row mt-3" style="height: 55vh; background: linear-gradient(to bottom, #f4f4f4, #e0e0e0);
    margin: 0;">
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  </div>
</main>
@include('footer')