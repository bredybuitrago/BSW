<!-- Site CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/commerce/css/style.css">

<div class="card card-default">
  <div class="card-header">
    <h4 class="card-title">Reserva</h4>
  </div>
  <div class="card-body">

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-6">
            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"> <img class="d-block w-100" src="<?php echo base_url(); ?>assets/commerce/images/big-img-01.jpg" alt="First slide"> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="<?php echo base_url(); ?>assets/commerce/images/big-img-02.jpg" alt="Second slide"> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="<?php echo base_url(); ?>assets/commerce/images/big-img-03.jpg" alt="Third slide"> </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span> 
              </a>
              <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
                <i class="fa fa-angle-right" aria-hidden="true"></i> 
                <span class="sr-only">Next</span> 
              </a>
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                  <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>assets/commerce/images/smp-img-01.jpg" alt="" />
                </li>
                <li data-target="#carousel-example-1" data-slide-to="1">
                  <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>assets/commerce/images/smp-img-02.jpg" alt="" />
                </li>
                <li data-target="#carousel-example-1" data-slide-to="2">
                  <img class="d-block w-100 img-fluid" src="<?php echo base_url(); ?>assets/commerce/images/smp-img-03.jpg" alt="" />
                </li>
              </ol>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-6">
            <div class="single-product-details">
              <h2>Cancha "Campeones 1A"</h2>
              <h5> <del>$ 95.000</del> $80.000</h5>
              <p class="available-stock"><span> Disponible/ <a href="#">Reservada 5 veces en el último mes </a></span><p>
                <h4>Descripción</h4>
                <p>Piso de la cancha: Grama Sintética, con buena iluminación, servicios de Cafetería, Camerinos y duchas. Alquiler de indumentaria/ informes. Cuanta con servicios de parqueadero </p>
                <ul>
                  <li>
                    <div class="form-group quantity-box">
                      <label class="control-label">Cantidad</label>
                      <input class="form-control" value="1" min="0" max="20" type="number">
                    </div>
                  </li>
                </ul>

                <div class="price-box-bar">
                  <div class="cart-and-bay-btn">
                    <a class="btn hvr-hover" data-fancybox-close="" href="#">Reservar</a>
                    <!-- <a class="btn hvr-hover" data-fancybox-close="" href="#">Más información</a> -->
                  </div>
                </div>

                <div class="add-to-btn">
                  <div class="add-comp">
                    <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Agregar a la lista de "Me gusta"</a>
                    <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Agregar a comparar</a>
                  </div>
                  <div class="share-bar">
                    <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                    <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                    <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">

          <div class="row my-5">
            <div class="card card-outline-secondary my-4">
              <div class="card-header">
                <h2>Comentarios de la cancha</h2>
              </div>
              <div class="card-body">
                <div class="media mb-3">
                  <div class="mr-2"> 
                    <img class="rounded-circle border p-1" src="<?php echo base_url(); ?>assets/commerce/images/user_bredi.jpeg" width="64">
                  </div>
                  <div class="media-body">
                    <p>La cancha nos gustó mucho, está limpia y ordenada, la grama esta en buenas condiciones y las empanadas que venden son muy buenas.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/22</small>
                  </div>
                </div>
                <hr>
                <div class="media mb-3">
                  <div class="mr-2"> 
                    <img class="rounded-circle border p-1" src="<?php echo base_url(); ?>assets/commerce/images/img-1.jpg" alt="Generic placeholder image" width="64">
                  </div>
                  <div class="media-body">
                    <p>La cancha gustó bastante, muy buenas instalaciones, y el servicio de reserva es muy agil.</p>
                    <small class="text-muted">Posted by Vinicius Jr. on 3/3/22</small>
                  </div>
                </div>
                <hr>
                <div class="media mb-3">
                  <div class="mr-2"> 
                    <img class="rounded-circle border p-1" src="<?php echo base_url(); ?>assets/commerce/images/img-3.jpg" alt="Generic placeholder image" width="64">
                  </div>
                  <div class="media-body">
                    <p>Good court, good sports environment, excellent web service..</p>
                    <small class="text-muted">Posted by K Benzema on 3/1/20</small>
                  </div>
                </div>
                <hr>
                <a href="#" class="btn hvr-hover">Deja tu comentario</a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row my-5">
            <div class="col-lg-12">
              <div class="title-all text-center">
                <h1>Futuros Eventos</h1>
                <p>Campeonatos Corporativos, Servicio de cafeteria y Parquedero... Ven y comparte con nosotros!</p>
              </div>
              <div class="featured-products-box owl-carousel owl-theme">
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Espectaculares espacios</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Varias Opciones para que disfrutes del buen futbol</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Buenas Instalaciones</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Buenos comentarios de nuestros clientes</h4>
                      <h5> :)</h5>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Sintetica de ultima generación</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Excelentes Espacios</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Seguridad y Amabilidad</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products-single fix">
                    <div class="box-img-hover">
                      <img src="<?php echo base_url(); ?>assets/commerce/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                      <div class="mask-icon">
                        <ul>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="#">Más información</a>
                      </div>
                    </div>
                    <div class="why-text">
                      <h4>Futbol y amigos</h4>
                      <!-- <h5> $9.79</h5> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>




    </div>
  </div>
