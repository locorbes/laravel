<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLON ADMIN</title>
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <!--ICONS-->
  <script src="https://kit.fontawesome.com/74ad526e77.js" crossorigin="anonymous"></script>
  <!--FONTS-->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;family=Poppins:wght@300;500;700&amp;display=swap" rel="stylesheet">
  <!--BOOTSTRAp-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--STYLES-->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    body {
        background-image: url("{{ asset('img/bg.png') }}");
        background-size: cover; 
    }
</style>
</head>
<body>
<div class="login-container">
    <div class="login-form py-3">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid my-5">        
        <form method="POST" action="login">
            @csrf
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text bg-white rounded-0"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input style="border: 0px;" name="email" type="email" class="form-control rounded-0" placeholder="E-mail" required="true">
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text bg-white rounded-0"><i class="fas fa-lock" aria-hidden="true"></i></span>
                    <input style="border: 0px;" name="password" type="password" class="form-control rounded-0" placeholder="Clave" required="true">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-block rounded-0">ACCEDER</button>
        </form>
        @if(session('message'))
        <div class="alert alert-warning alert-dismissible fade show mt-3 p-3 rounded-0" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
</div>
<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
