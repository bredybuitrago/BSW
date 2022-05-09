<div class="card card-default">
  <div class="card-header">
    <h4 class="card-title">Busca tu mejor opción</h4>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-sm-12">
        <div>
          <!-- <button onclick="clearing()">Click me</button> -->
          <div id="map" style="top:0; bottom:0; width:100%; min-height: 600px;"></div>

        </div>
      </div>
    </div>   
  </div>
</div>

<div class="card card-default">
  <div class="card-header">
    <h4 class="card-title">Especial para ti</h4>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-sm-12">
        <div class="div_carrusel">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" ><!-- style="height: 326pt;" -->
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/banner/reserva_tu_cancha_red.gif" alt="Reserva tu cancha" height="500">
                <div class="carousel-caption d-none d-md-block">
                <<!-- h5>Subtitulo</h5>
                  <p>texto</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/banner/tienes_estilo.gif" alt="Tienes estilo" height="500">
                <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Subtitulo</h5>
                  <p>texto</p> -->
                </div>
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/banner/mega_sale_red.gif" alt="Las mejores canchas" height="500">
                <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Subtitulo</h5>
                  <p>texto</p> -->
                </div>
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/banner/Captura1_red.JPG" alt="promo" height="500">
                <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Subtitulo</h5>
                  <p>texto</p> -->
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>

<script type="text/javascript"> const cordenadas_locales = '<?php echo json_encode($locales); ?>';</script>

