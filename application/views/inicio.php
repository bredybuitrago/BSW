
<!-- Site CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/commerce/css/style.css">

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


<!-- Start Shop Page ecommerce -->
<div class="card card-default">
  <div class="card-header">
    <h4 class="card-title">Reserva tu cancha</h4>
  </div>
  <div class="card-body">
    <div class="shop-box-inner">
      <div class="">
        <div class="row">
          <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
            <div class="right-product-box">

              <div class="product-item-filter row">
                <div class="col-12 col-sm-8 text-center text-sm-left">
                  <div class="toolbar-sorter-right">
                    <span>Odenar por </span>
                    <select id="ddl_order_by" class="selectpicker show-tick form-control" data-placeholder="$COL">
                      <option value="0">Calificaciones</option>
                      <option value="1">Popularidad</option>
                      <option value="2">Alto precio → Bajo precio</option>
                      <option value="3">Bajo precio → Alto precio</option>
                      <option value="4">Más reservada</option>
                    </select>
                  </div>
                  <p>Mostrando resultados</p>
                </div>
                <div class="col-12 col-sm-4 text-center text-sm-right">
                  <ul class="nav nav-tabs ml-auto">
                    <li>
                      <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                    </li>
                    <li>
                      <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="product-categorie-box">
                <div class="tab-content">

                  <!-- CANCHAS EN CUADRICULA -->
                  <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                    <div class="row" id="div_content_canchas">

                    </div>
                  </div>

                  <!-- CANCHAS EN LISTA -->
                  <div role="tabpanel" class="tab-pane fade" id="list-view"></div>

                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
            <div class="product-categori">
              <div class="search-product">
                <form action="#">
                  <input class="form-control" placeholder="Buscar aquí..." type="text">
                  <button type="submit"> <i class="fa fa-search"></i> </button>
                </form>
              </div>
              <div class="filter-sidebar-left">
                <div class="title-left">
                  <h3>Barrios</h3>
                </div>
                <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                  <div class="list-group-collapse sub-men">
                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Puente Aranda <small class="text-muted">(5)</small>
                    </a>
                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">Cancheritos <small class="text-muted">($50.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Champions Bogotá <small class="text-muted">($60.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Amigos club <small class="text-muted">($60.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Lideres <small class="text-muted">($65.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Zona B <small class="text-muted">($70.000)</small></a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-collapse sub-men">
                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Bochica 
                      <small class="text-muted">(3)</small>
                    </a>
                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Capellanías <small class="text-muted">($50.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Futboleros <small class="text-muted">($60.000)</small></a>
                        <a href="#" class="list-group-item list-group-item-action">Cancharitos Bochica <small class="text-muted">($70.000)</small></a>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="list-group-item list-group-item-action"> Muzú  <small class="text-muted">(1) </small></a>
                  <a href="#" class="list-group-item list-group-item-action"> Santa Rita <small class="text-muted">(2)</small></a>
                  <a href="#" class="list-group-item list-group-item-action"> Industrial Centenario <small class="text-muted">(3)</small></a>
                </div>
              </div>
              <div class="filter-price-left">
                <div class="title-left">
                  <h3>Precio por hora</h3>
                </div>
                <div class="price-box-slider">
                  <div id="slider-range"></div>
                  <p>
                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                    <button class="btn hvr-hover" type="submit">Filtrar</button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Shop Page -->



<script type="text/javascript"> const cordenadas_locales = '<?php echo json_encode($locales); ?>';</script>


