@include('head')
@include('nav')
<main class="mb-5 pb-5">
  <div class="px-3">
    @include('header')

    <div class="p-3 mb-4 text-center text-white bg-dark opacity-75 rounded-3" style="overflow-y: auto; max-height: 80vh;" id="main">
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-12 mx-3 p-3 bg-light rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-md-2 mx-3 text-dark bg-light border rounded-3">
                            <div class="card my-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Estadísticas</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">30<small class="text-body-secondary fw-light">/30</small></h1>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">ENE:</th>
                                                <td>20 users included</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">FEB:</th>
                                                <td>15 users included</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">MAR:</th>
                                                <td>18 users included</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ABR:</th>
                                                <td>22 users included</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">MAY:</th>
                                                <td>25 users included</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">JUN:</th>
                                                <td>30 users included</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mx-3 text-dark bg-light border rounded-3">
                            <canvas id="bar"></canvas> 
                            <canvas id="line"></canvas> 
                        </div>
                        <div class="col-md-2 mx-3 text-dark bg-light border rounded-3">
                            <canvas id="pie"></canvas>
                            <canvas id="doughnut"></canvas>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  </div>
</main>
<script>
    var ctx = document.getElementById("bar").getContext("2d");
    var myChart = new Chart(ctx,{
        type: "bar",
        data: {
            labels: ['ene', 'feb', 'mar', 'abr', 'may', 'jun'],
            datasets: [{
                label: 'DATOS',
                data: [30,15,20,13,5,23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.7)', // Rojo
                'rgba(54, 162, 235, 0.7)', // Azul
                'rgba(255, 206, 86, 0.7)', // Amarillo
                'rgba(75, 192, 192, 0.7)', // Verde
                'rgba(153, 102, 255, 0.7)', // Morado
                'rgba(255, 159, 64, 0.7)'  // Naranja
                ]
            }] 
        }
    });
</script>
<script>
    var ctx = document.getElementById("line").getContext("2d");
    var myChart = new Chart(ctx,{
        type: "line",
        data: {
            labels: ['ene', 'feb', 'mar', 'abr', 'may', 'jun'],
            datasets: [{
                label: 'DATOS',
                data: [30,15,20,13,5,23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.7)', // Rojo
                'rgba(54, 162, 235, 0.7)', // Azul
                'rgba(255, 206, 86, 0.7)', // Amarillo
                'rgba(75, 192, 192, 0.7)', // Verde
                'rgba(153, 102, 255, 0.7)', // Morado
                'rgba(255, 159, 64, 0.7)'  // Naranja
                ]
            }] 
        }
    });
</script>
<script>
    var ctx = document.getElementById("pie").getContext("2d");
    var myChart = new Chart(ctx,{
        type: "pie",
        data: {
            labels: ['ene', 'feb', 'mar', 'abr', 'may', 'jun'],
            datasets: [{
                label: 'DATOS',
                data: [30,15,20,13,5,23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.7)', // Rojo
                'rgba(54, 162, 235, 0.7)', // Azul
                'rgba(255, 206, 86, 0.7)', // Amarillo
                'rgba(75, 192, 192, 0.7)', // Verde
                'rgba(153, 102, 255, 0.7)', // Morado
                'rgba(255, 159, 64, 0.7)'  // Naranja
                ]
            }] 
        }
    });
</script>
<script>
    var ctx = document.getElementById("doughnut").getContext("2d");
    var myChart = new Chart(ctx,{
        type: "doughnut",
        data: {
            labels: ['ene', 'feb', 'mar', 'abr', 'may', 'jun'],
            datasets: [{
                label: 'DATOS',
                data: [30,15,20,13,5,23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.7)', // Rojo
                'rgba(54, 162, 235, 0.7)', // Azul
                'rgba(255, 206, 86, 0.7)', // Amarillo
                'rgba(75, 192, 192, 0.7)', // Verde
                'rgba(153, 102, 255, 0.7)', // Morado
                'rgba(255, 159, 64, 0.7)'  // Naranja
                ]
            }] 
        }
    });
</script>
@include('footer')