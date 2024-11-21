<?php require_once("vista/layout/header.php");?>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner" style="position: relative;">
    <div class="carousel-item active">
      <img src="vista/img/imagen interfaz.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="vista/img/fondo interfaz 2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="vista/img/interfaz 3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<center><h1>Servicios</h1></center>
<br>

<div class="container text-center">
  <div class="row">
    <!-- Primera fila: 3 imágenes -->
    <div class="col-md-4">
      <img src="vista/img/insignia de guia.png" class="img-fluid" alt="Guía" style="width: 100px;">
      <p>Guía especializadas</p>
    </div>
    <div class="col-md-4">
      <img src="vista/img/insignia de hotel.png" class="img-fluid" alt="Hotel" style="width: 100px;">
      <p>Hoteles</p>
    </div>
    <div class="col-md-4">
      <img src="vista/img/insignia de paquete de viajes.png" class="img-fluid" alt="Paquete de viajes" style="width: 100px;">
      <p>Paquete de viajes</p>
    </div>
  </div>
  <br>
  <br>

  <div class="row">
    <!-- Segunda fila: 2 imágenes -->
    <div class="col-md-6">
      <img src="vista/img/excursiones.png" class="img-fluid" alt="Excursiones" style="width: 100px;">
      <p>Excursionismos</p>
    </div>
    <div class="col-md-6">
      <img src="vista/img/renta de unidades.png" class="img-fluid" alt="Renta de unidades" style="width: 100px;">
      <p>Renta de transporte</p>
    </div>
  </div>
</div>
<br>
<center><h1>Descubre Chiapas y sus culturas</h1></center>
<br>
<div class="image-container">
  <div class="card custom-card">
    <img src="vista/img/san cristobal.jpg" class="card-img-top" alt="">
    <h5>San Cristobal de las Casas, 3 días/2 noches </h5>
  </div>

  <div class="card custom-card">
    <img src="vista/img/cañon del sumidero.jpg" class="card-img-top cropped-image" alt="">
    <h5>Cañon del sumidero, 1 día </h5>
  </div>
</div>
<br>
<br>
<!-- Imagenes Nuevas (3 en fila) -->
<div class="new-image-container">
  <!-- Primera imagen -->
  <div class="card custom-card">
    <img src="vista/img/673c1cb5293ae_palenque_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
      <h5 class="card-title">Palenque, 4 días/3 noches</h5>
    </div>
  </div>

  <!-- Segunda imagen -->
  <div class="card custom-card">
    <img src="vista/img/chiapa de corzo.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
      <h5 class="card-title">Chiapa de Corzo, 2 días/1 noche</h5>
    </div>
  </div>

  <!-- Tercera imagen -->
  <div class="card custom-card">
    <img src="vista/img/selva-lacandon.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
      <h5 class="card-title">Selva Lacandona, 3 días/2 noches</h5>
    </div>
  </div>
</div>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="vista/js/estilo.js"></script>
<?php require_once("vista/layout/footer.php");?>
