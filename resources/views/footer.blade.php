<footer class="footer fixed-bottom" style="z-index: 1;">
  <div class="w-100 text-end">
      <img src="{{ asset('img/footer.png') }}" alt="Logo" height="60px">
  </div>
  <div class="container-fluid bg-dark text-light py-2 mt-0">
      <div class="row justify-content-end">
          <div class="col-md-2 text-end">
            <span class="fs-2" style="margin-bottom: -12px; margin-left: auto; margin-top: auto; font-family: 'Changa One', sans-serif;">{{ $title }}</span>
            <!--button type="button" class="btn btn-dark rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="PHP: {{ phpversion() }} <br> LARA: {{ app()->version() }} <br> APP: {{ config('constants.APP_VERSION') }}">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
            </button-->
      </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
var sidenavVisible = true; // Variable para rastrear el estado del sidenav

function toggleSidenav() {
  var sidenav = document.getElementById('sidenav');

  if (sidenavVisible) {
    sidenav.style.left = '-250px'; // Oculta el sidenav
  } else {
    sidenav.style.left = '0px'; // Muestra el sidenav
  }

  sidenavVisible = !sidenavVisible; // Invierte el estado
}
</script>
<script>
  // Inicializar Popover
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl, {
      html: true
    });
  });
</script>
</body>
</html>