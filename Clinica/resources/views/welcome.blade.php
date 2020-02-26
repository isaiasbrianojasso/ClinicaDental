@extends('menu')
@section('menu')
<audio class="audio">
    <source src="demo-lp-lost-on-you.mp3" type="audio/ogg">
</audio> 
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content rounded" name="intro-content" id="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6"><br>
              <div id="carouselExampleIndicators" class="carousel slide" style="margin:50%;" data-ride="carousel">
  
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/img/fondos/sds.jpg" alt="First slide">
                  </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>            </div>
            <!--
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="img/dummy/img-1.png" class="img-responsive" alt="" />
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row bg-primary rounded shadow-lg face" style="opacity :0.7;  border-radius: 2em; border: none;
        border-radius: 40px 10px;  ">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fas fa-calendar-check fa-3x circled bg-primary"></i>
                <h4 class="h-bold mt-2">Realiza una cita con nosotros</h4>
                <p>
                    Ven y realízate una evaluación con nosotros.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fab fa-cc-amazon-pay fa-3x circled bg-primary"></i>
                <h4 class="h-bold">Cotizaciones</h4>
                <p>Te realizamos una cotizacion segun lo que ocupes  y en base a tu presupuesto no dudes en preguntarnos tendremos siempre el mejor servicio              </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-primary"></i>
                <h4 class="h-bold">Escoge a tu especialista</h4>
                <p>
Estamos capacitados para dar el mejor servicio y 100% recomendados por clientes que avalan nuestros trabajos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="far fa-question-circle fa-3x circled bg-primary"></i>
                <h4 class="h-bold">Dudas o Comentarios</h4>
                <p>
           Contactanos al telefono: <a style="color:yellow;" href="tel:444-140-08-59">444-140-08-59</a> o por nuestras redes sociales.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-info face" style="border: none;
            border-radius: 40px 10px;  ">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Te gustaria apartar una Cita</h3>
                      <p>Puedes revisar que dias estamos ocupados 
                          y asi tomar una desicion de cuando se ajusta a tu horario da click en el boton a continuacion<i class="fas fa-arrow-circle-right  text-success display-1"></i></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a data-toggle="modal" data-target="#modalreservar" class="btn btn-primary btn-lg"><img class="img-fluid img-thumbnail" src="/assets/img/cita.png" width="80px" heigth="80px" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6 ">
            <div class="wow fadeInUp bg-warning face" data-wow-delay="0.2s">
              <div class="well well-trans" style="margin-top:20%; border: none;
              border-radius: 40px 10px;">
                <div class="wow fadeInRight bg-info" data-wow-delay="0.1s" style="border: none;
                border-radius: 40px 10px;">
                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Calidad Garantizada</strong><br />El éxito de nuestros tratamientos consiste en la satisfacción de cada paciente al sonreír.</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span><br> <span class="list"><strong>Sonríe más, sonríe mejor.</strong><br />Usamos solo material de la mejor calidad para cualquier servicio que ocupes</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Estamos Certificados</strong><br />Acude con nosotros Especialistas en Ortodoncia egresados de escuela Certificada por AMO. Asociación Mexicana de Ortodoncia</span></li>
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc face">
                  <h5 class="h-light"></h5>
                  <p>En Odontología Medica Coral ofrecemos tratamientos de ortodoncia que se acoplan a las necesidades del caso de cada paciente, asi como tratamientos integrales en manos expertas y con tecnología a la vanguardia. 

                      Para la satisfacción de cada paciente las instalaciones son cómodas, amplias y modernas. 
                      
                      
                      Mejorar tu salud bucal te brinda la confianza de volver a sonreír con plenitud.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box face">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light"></h5>
                  <p>Sonreír tiene efectos en nuestro estado físico, mental y social, ayuda a la liberación de múltiples neuropéptidos que relajan nuestro cuerpo y algunos actúan como antidepresivos que nos hacen estar de mejor humor.


                      Respecto a nuestras relaciones sociales, también se ha demostrado que cuando sonríes los demás te tratan de forma diferente, ya que te perciben como más atractivo o atractiva, relajado y de confianza. </p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60 face">
      <div class="container marginbot-30">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.7199598898615!2d-100.9474134850482!3d22.136650485408794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1555734166877!5m2!1ses!2smx">
              <div class="section-heading text-center">
                <h2 class="h-bold"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.7199598898615!2d-100.9474134850482!3d22.136650485408794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1555734166877!5m2!1ses!2smx">Ubicado en... <i class="fas fa-street-view"></i></a></h2>
                <div class="col-12-md bg-light">
                        <iframe class="rounded  bg-light col-12 mt-5 mb-5"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.7199598898615!2d-100.9474134850482!3d22.136650485408794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1555734166877!5m2!1ses!2smx"
                            width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
    </a>


        <div class="container mt-5">
          <div class="row face">
            <div class="row face">
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                           data-image="../assets/img/img/fondos/16.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/img/fondos/16.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                        data-image="../assets/img/img/fondos/17.jpg"
                        data-target="#image-gallery">
                            <img class="img-thumbnail"
                            src="../assets/img/img/fondos/17.jpg"
                            alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                        data-image="../assets/img/img/fondos/18.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                            src="../assets/img/img/fondos/18.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                           data-image="../assets/img/51962238_320838801874799_5237366924144279552_n.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/51962238_320838801874799_5237366924144279552_n.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="IDespues"
                           data-image="../assets/img/53709952_331847854107227_126583311962210304_n.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/53709952_331847854107227_126583311962210304_n.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>   
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                           data-image="../assets/img/54727821_336467103645302_1854478724209049600_n.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/54727821_336467103645302_1854478724209049600_n.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                           data-image="../assets/img/55502518_333473040611375_987938307390308352_n.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/55502518_333473040611375_987938307390308352_n.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Despues"
                           data-image="../assets/img/56225967_340568356568510_7052704696556847104_n.jpg"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="../assets/img/56225967_340568356568510_7052704696556847104_n.jpg"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Antes"
                        data-image="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-0/p640x640/70817235_422091868416158_5145258571637719040_o.jpg?_nc_cat=105&_nc_ohc=X4-SB_TxGIwAX-JZV7b&_nc_ht=scontent-lax3-1.xx&_nc_tp=1002&oh=831103ee0b9b98deeca355be86469ac1&oe=5ED4B02B"                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                            src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-0/p640x640/70817235_422091868416158_5145258571637719040_o.jpg?_nc_cat=105&_nc_ohc=X4-SB_TxGIwAX-JZV7b&_nc_ht=scontent-lax3-1.xx&_nc_tp=1002&oh=831103ee0b9b98deeca355be86469ac1&oe=5ED4B02B"                                alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Antes"
                           data-image="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-0/p640x640/75412229_459767434648601_4688191785539731456_o.jpg?_nc_cat=104&_nc_ohc=xIT2A9W7-p0AX_xv3lV&_nc_ht=scontent-lax3-1.xx&_nc_tp=1002&oh=46fb94d25702fce39bb0a02088024842&oe=5ECF81D4"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-0/p640x640/75412229_459767434648601_4688191785539731456_o.jpg?_nc_cat=104&_nc_ohc=xIT2A9W7-p0AX_xv3lV&_nc_ht=scontent-lax3-1.xx&_nc_tp=1002&oh=46fb94d25702fce39bb0a02088024842&oe=5ECF81D4"
                                 alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Antes"
                           data-image="https://scontent-lax3-2.xx.fbcdn.net/v/t1.0-0/p640x640/80646454_490004264958251_4458092524724027392_o.jpg?_nc_cat=106&_nc_ohc=JGGdFS5Kv-4AX9HsDbm&_nc_ht=scontent-lax3-2.xx&_nc_tp=1002&oh=ad02b68b441281313ea50d26aff45f02&oe=5E90356C"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="https://scontent-lax3-2.xx.fbcdn.net/v/t1.0-0/p640x640/80646454_490004264958251_4458092524724027392_o.jpg?_nc_cat=106&_nc_ohc=JGGdFS5Kv-4AX9HsDbm&_nc_ht=scontent-lax3-2.xx&_nc_tp=1002&oh=ad02b68b441281313ea50d26aff45f02&oe=5E90356C"
                                 alt="Another alt text">
                        </a>
                    </div>
                    
                </div>
        
        
                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                </button>
                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Siguenos en FaceBook <i class="fab fa-facebook-square"></i></h2>
                <div class="fb-like" data-href="https://www.facebook.com/medicacoral/" data-width="" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div></div>
                <div class="fb-comments" data-href="https://www.facebook.com/medicacoral/" data-width="" data-numposts="5"></div>
              </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <div class="mark">Evaluacion: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                        class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                    </div>
                      <p>Excelente profesionalismo y trato. 
                          Te explican a detalle y muy buena revisión.
                          Los recomiendo ampliamente.</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI9VCNp1MXFz_NDRV_JJR-ym1EGhvHfit3lfbzfHLMkEBZlJ9T" alt="" class="person img-circle" />
                      <span>San Luis Potosi,Mex</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <div class="mark">Evaluacion: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                        class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                    </div>
                      <p>Excelente atención, profesional, altamente recomendable</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTyMUou6Km3MJYgxwB0CZfGfMO8wwwH5VdOW6FdGYVg1t3B4T38" alt="" class="person img-circle" />
                      <span>San Luis Potosi,Mex</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                      <div class="block-text rel zmin">
                        <div class="mark">Evaluacion: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                        <p>buena atención 100% recomendable</p>
                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                      </div>
                      <div class="person-text rel text-light">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Wikipedia_User-ICON_byNightsight.png" alt="" class="person img-circle" />
                        <span>San Luis Potosi,Mex</span>
                      </div>
                    </div>

                </div>
                <!--
                <div class="item">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Birth control pills</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Lucas Thompson</a>
                      <span>Austin, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Radiology</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Ella Mentree</a>
                      <span>Fort Worth, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Cervical Lesions</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Suzanne Adam</a>
                      <span>Detroit, Michigan</span>
                    </div>
                  </div>
                </div>


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    Section: pricing 
    <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Health packages</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Basic Fit 1 Package</h2>
                <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Golden Glow Package</h2>
                <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                  <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2>Basic Fit 2 Package</h2>
                <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>-->
    </section>
  
    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Acerca de Odontología Medica Coral</h5>
                <p>

                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Informacion</h5>
                <ul>
                  <li><a href="#">Principal</a></li>
                  <li><a href="#">Testigos</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Terminos y Condiciones</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Odontología Medica Coral</h5>
                <p>
                  Especialistas en Ortodoncia egresados de escuela Certificada por AMO. 
                  Asociación Mexicana de Ortodoncia.                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Lunes - Sabado, 9am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 444-140-08-59
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> ventas@odontologiamedicacoral.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Ubicanos en</h5>
                <p>Av. Coral 1021 - A dos cuadras del estadio Alfonso lastras.</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Siguenos</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="https://www.facebook.com/medicacoral/?tn-str=k*F"><i class="fab fa-facebook-square"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>





    <!-- Modal -->
    <div class="modal fade" id="modalreservar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="font-family: 'Indie Flower', cursive;
    ">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>Cerrar
                        </button>
                </div>
            <form action="{{action('CitasController@enviar')}}">
                @csrf
                <div class="modal-body">
                  <div class="row" style="margin:20px;">
                    <div class="col-md-6 inline-block">
                      <label for="nombre">Nombre</label>
                      <input  class="form-control" type="text" name="nombre" id="nombre" required>
                      <label for="doctor">Tratamiento</label>      
                      <select class="form-control" name="tratamiento">
                          <option  class="form-control" value="Ortodoncia y ortopedia dentomaxilofacial">Ortodoncia y ortopedia dentomaxilofacial</option>
                          <option class="form-control" value="Odontopediatria">Odontopediatria</option>
                          <option class="form-control" value="Cirugía de 3eros molares">Cirugía de 3eros molares</option>
                          <option class="form-control" value="Periodoncia">Periodoncia</option>
                          <option class="form-control" value="Prótesis y Rehabilitación">Prótesis y Rehabilitación</option>
                          <option class="form-control" value="Endodoncia">Endodoncia</option>
                          <option class="form-control" value="Profilaxis dental">Profilaxis dental</option>
                      </select>
                      <label for="telefono">Telefono</label>
                      <input class="form-control" type="number" name="telefono" id="telefono" >
                    </div>
                    <div class="col-md-6">
                      <label for="date">Fecha</label>
                      <input class="form-control" type="date" name="date" id="date" required>
                      <label for="hora">Selecciona una hora por favor</label>
                      <input type="time" id="timepicker1" name="timepicker1" class="form-control timepicker" required/>

             <label for="email">Email</label>
             <input class="form-control" type="email" name="emails" id="emails">
              </div>
    </div>
    <div class="md-form">
      <i class="fas fa-pencil-alt prefix"></i>
      <label for="notas">Notas Adicionales</label>
      <textarea id="notas" name="notas" class="md-textarea form-control" rows="3"></textarea>
    </div>

      </div>
      <input type="hidden" name="registro" id="registro" value=" {{ date('Y-m-d') }}">
      <textarea disabled class="md-textarea form-control" rows="3" placeholder="Nota: Al enviar el siguiente formulario no asegura la cita en la fecha/hora escrita esta pasara primero a revision y luego autorizacion se le mandara un mensaje si se confirma o se le puede dar otra hora/dia para la cita."></textarea>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Quisiera una cita</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    
      <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ">Login</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                          <form method="POST" class=" form-group" style="margin:20px;" action="{{ route('login') }}">
                              @csrf
                              <div class="text-center">
                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
                              
                              <div class="form-group row mb-0">
                                  
                                      <div class="col-md-8 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                             Entrar
                                          </button>
                                           
                                          @if (Route::has('password.request'))
                                              <a class="btn btn-link  border border-secondary" href="{{ route('password.request') }}">
                                                  Olvidaste tu contraseña
                                              </a>
                                          @endif 
                                         
                                      <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="remember">Recuerdame
                                                          </label>
                                      </div>
                                  </div>
                                  </div>
                          </form>
              </div>
            </div>
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   
    
<script>$(document).ready(function () {
  $(".se-pre-con").fadeOut("slow");
    $(".audio")[0].play();
});</script>
      @endsection

     
