@extends('menu')
@section('menu')
    <main style="font-family: 'Oxygen', sans-serif;">
        <div class="container">
            <div class="row">
              <div class="col-12 mt-5 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="/assets/img/WhatsApp Image 2019-07-24 at 21.31.52(1).jpeg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/assets/img/WhatsApp Image 2019-07-24 at 21.31.53.jpeg"
                                    alt="Second slide">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="/assets/img/WhatsApp Image 2019-07-24 at 21.31.53(1).jpeg" alt="Third slide">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/assets/img/WhatsApp Image 2019-07-24 at 21.31.52.jpeg"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/assets/img/WhatsApp Image 2019-08-02 at 16.10.24.jpeg"
                                    alt="fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/assets/img/WhatsApp Image 22019-08-02 at 16.10.24.jpeg"
                                    alt="Fifth slide">
                            </div>
                        </div>
                    </div>
                    <a href="">
                        <div class="mascara"></div>
                    </a>
                </div>
            
                <div class="row">
                    <div class="col-4 bg-light border border-info shadow-lg rounded " style="border-radius: 25px;">
                      <div class="card-body contenedor1">
                            <h5 class="card-title">Hora de Abrir</h5>
                            <p class="card-text datos1">
                              <ul>
                                  <label for="Dias">Lunes-Viernes</label>
                                  <li class="text-success">9:00 a 10:00pm</li><br>
                                  <label for="Dias">Sabado</label>
                                  <li class="text-success">9:00 a 7:00pm</li>
                              </ul>
                            </p>

                            <a data-toggle="modal" data-target="#modalreservar" class="btn btn-primary">Reservar</a>
                       
                          </div>
                          <a data-toggle="modal" data-target="#modalreservar" >
                              <div class="circulo"><i class="fas fa-plus plus"></i></div>
                            </a>
                              <a data-toggle="modal" data-target="#modalreservar" >
                                  <div class="mascara1"> </div>
                              </a> 
                          
                        </div>
                          <div class="col-4 bg-light border border-primary shadow-lg rounded " style="border-radius: 25px;">
                              <div class="card-body">
                                  <h5 class="card-title">Dias Reservados</h5>
                                  <p class="card-text">
                                  Puedes revisar que dias estamos ocupados y asi tomar una desicion de cuando se ajusta a tu horario</p>
                                  <label for="dia">Selecciona la fecha por favor</label>
                            <input id="datepicker" width="276" />
                          </div>
                            <script>
                          $('#datepicker').datepicker(
                               {
                                    uiLibrary: 'bootstrap4'

                                });
                            </script>
                          </div>
                          <div class="col-4 bg-light border border-success shadow-lg rounded  " style="border-radius: 25px;">
                              <div class="card-body">
                                  <h5 class="card-title ">En caso de Emergencias</h5>
                                  <p class="card-text text-info h1"> 444-222-6789</p>
                             </div>
                             <a href="">
                                <div class="circulo h1"><i class="fas fa-mobile"></i></div>
                              </a>
                             </div>
                    </div>    
                  </div> 
      <div class="row">
                <div class="col-6 mb-4  mt-5" style="border-radius: 25px;">
                    <div class="card text-left " style="border-radius: 25px;">
                        <div class="module-border-wrap" style="border-radius: 25px;">
                            <div class="module" style="border-radius: 25px;">
                                <div class="card-body">
                                    <p class="card-text text-dark" style="font-family: 'Lato', sans-serif;
                            ">En <strong>Odontología Medica Coral</strong> ofrecemos tratamientos de ortodoncia que se
                                        acoplan a las necesidades del caso de cada paciente, asi como tratamientos
                                        integrales en
                                        manos expertas y con tecnología a la vanguardia. <br><br> Para la satisfacción
                                        de cada
                                        paciente
                                        las
                                        instalaciones son cómodas, amplias y modernas. <br><br><br><strong>Mejorar tu
                                            salud bucal </strong> te brinda la confianza de volver a sonreír con
                                        plenitud.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>

                <div class="col-6 mt-5 mb-4" style="border-radius: 25px;">
                    <div class="card text-left" style="border-radius: 25px;">
                        <div class="module-border-wrap" style="border-radius: 25px;">
                            <div class="module" style="border-radius: 25px;">
                                <div class="card-body">
                                    <p class="card-text text-dark" style="font-family: 'Lato', sans-serif;
                            ">
                                        Sonreír tiene <strong>efectos</strong> en nuestro estado
                                        físico, mental y social, ayuda a la liberación de múltiples neuropéptidos que
                                        relajan nuestro cuerpo y algunos
                                        actúan como antidepresivos que nos hacen estar de mejor humor.<br><br><br>

                                        Respecto a nuestras <strong>relaciones sociales</strong>, también se ha
                                        demostrado que cuando
                                        sonríes los demás te tratan de forma diferente, ya que te perciben como más
                                        atractivo o atractiva, relajado y de confianza.
                                        <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>


     <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/img/3.jpeg"
                allowfullscreen></iframe>
            </div>

          </div>

    

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/img/3.jpeg" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/img/4.jpeg"
                allowfullscreen></iframe>
            </div>

          </div>

  

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/img/4.jpeg" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/img/5.jpeg"
                allowfullscreen></iframe>
            </div>

          </div>

      
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: Name-->
    <a><img class="img-fluid z-depth-1" src="/assets/img/img/5.jpeg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
    <!--Modal: Name-->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.28.23.png"
                allowfullscreen></iframe>
            </div>
          </div>
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: Name-->
    <a><img class="img-fluid z-depth-1" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.28.23.png" alt="video"
        data-toggle="modal" data-target="#modal2"></a>

  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <!--Modal: Name-->
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/img/promocion2.jpeg"
                allowfullscreen></iframe>
            </div>

          </div>


        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/img/promocion2.jpeg" alt="video"
        data-toggle="modal" data-target="#modal5"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.27.30.png"
                allowfullscreen></iframe>
            </div>

          </div>

  

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.27.30.png" alt="video"
        data-toggle="modal" data-target="#modal3"></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

            <div class="col-12 rounded mb-5 mt-1 bg-light">
                <div class="py-1 text-center bg-light" style="border-radius: 25px;">
                    <button type="button" class="button  btn-lg shadow-lg  " data-toggle="modal" data-target="#modelId"
                        style=" bottom:5px;  position: relative; font-size: 24px; padding: 14px 40px; font-family: 'Lato', sans-serif;">Ubicanos</button>
                </div>
                <div class="jumbotron jumbotron-fluid  bg-light rounded" style="margin-top: -90px; ">
                    <iframe class="rounded  bg-light col-12 mt-5 mb-5"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.7199598898615!2d-100.9474134850482!3d22.136650485408794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1555734166877!5m2!1ses!2smx"
                        width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

 <script>
     $('#exampleModal').on('show.bs.modal', event => {
         var button = $(event.relatedTarget);
         var modal = $(this);
         // Use above variables to manipulate the DOM
         
     });
 </script>
 
            <!-- WhatsApp -->
            <a href="https://api.whatsapp.com/send?phone=524441400858&text=Hola,%20quiero%20agendar%20una%20cita%20en%20Clínica%20Coral"
                class="whatsapp" target="_blank"><img src="/assets/img/Whatsapp.png" width="60" height="60" alt="">
            </a>

            <a href="https://www.instagram.com/ortodoncia_medicacoral/" class="instagram" target="_blank"><img
                    src="/assets/img/instagram.png" width="60" height="60" alt="">
            </a>

            <a href="https://www.facebook.com/medicacoral/" class="facebook" target="_blank"><img
                    src="/assets/img/facebook.png" width="60" height="60" alt="">

            </a>

        </div>
    </main>







    <!-- Modal -->
<div class="modal fade" id="modalreservar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reservar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <form action="{{action('CitasController@enviar')}}">
            @csrf
            <div class="modal-body">
                <label for="nombre">Nombre</label>
                <input  class="form-control" type="text" name="nombre" id="nombre" required>
                <label for="telefono">Telefono</label>
                <input class="form-control" type="number" name="telefono" id="telefono" required>
                <label for="date">Fecha</label>
                <input class="form-control" type="date" name="date" id="date" required>
                <label for="hora">Selecciona una hora por favor</label>
                <input id="fechaInicio" name="fechaInicio" class="form-control" required/>
  <script>$(document).ready(function() {
        $('#fechaInicio').timepicker({
          useCurrent: false,
          format: 'HH:mm:ss',
          minuteStep: 1,
          showSeconds: false,
          showMeridian: false,
          disableFocus: true,
          icons: {
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down'
          }
        }).on('focus', function() {
          $('#fechaInicio').timepicker('showWidget');
        });
      
      });</script>
  <div class="md-form">
        <i class="fas fa-pencil-alt prefix"></i>
        <label for="notas">Notas Adicionales</label>
        <textarea id="notas" name="notas" class="md-textarea form-control" rows="3" required></textarea>
      </div>
  </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
                      <form method="POST" class=" form-group" action="{{ route('login') }}">
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
    </body>
</html>
@endsection

