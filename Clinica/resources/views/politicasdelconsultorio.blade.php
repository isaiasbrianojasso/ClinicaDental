@extends('menu')
@section('menu')
<audio class="audio">
    <source src="demo-lp-lost-on-you.mp3" type="audio/ogg">
</audio> 
<body>
  <main style="font-family: 'Oxygen', sans-serif;">
        <div class="container bg-white">
            <div class="row">
                <div class="col-12 bg-primary" style="border-radius: 2em; border: none;
                border-radius: 40px 10px; margin-top:2%">      
                    <h1 class="text-white text-center mt-3 ml-5 mr-5 face">Politicas del
                        Consultorio</h1>
                </div>

                <div class="col-6 mt-5 text-secondary">
                    <h2 class="text-primary text-center face">Cancelación de citas</h2>
                    <p class="text-info face" style="margin-left:2%;">Si por alguna razón no puedes asistir a tu cita, por favor comunícate para
                        cancelarla con 24 horas de anticipación y programar una nueva cita para el día y hora que más te
                        convenga.</p>
                    <p class="text-info face" style="margin-left:2%;">De esta forma, permites que otro paciente utilice ese horario.</p>
                    <h2 class="text-primary text-center face">Visitas periódicas</h2>
                    <p class="text-info face" style="margin-left:2%;">Las visitas periódicas son una parte importante del tratamiento ortodóncico.
                        Por lo general tus
                        citas serán cada 4 u 8 semanas para hacer ajustes a tus aparatos y así como evaluar el progreso
                        del tratamiento.</p>

                    <p class="text-info face" style="margin-left:2%;">Es necesario que además de acudir a tus citas, sigas las instrucciones que te
                        damos, que
                        mantengas una buena higiene oral y la alimentación apropiada. Es importante también que cada 6
                        meses acudas con tu odontólogo general.</p>

                    <p class="text-info face" style="margin-left:2%;">Ya terminado el tratamiento, se quitaran todos los brackets de tu boca y se
                        colocaran retenedores
                        que se utilizan para mantener los dientes en su nueva posición hasta que tu hueso, encías y
                        músculos se adapten a la nueva oclusión.</p>

                    <h2 class="text-primary text-center face" style="margin-left:2%;">Desprendimiento de brackets o alambres rotos</h2>

                    <p class="text-info face" style="margin-left:2%;">Es muy importante que te comuniques con nosotros si llegas a presentar un bracket despegado o un
                        alambre roto y podamos programar una cita de reparación.</p>
                    <p class="text-info face" style="margin-left:2%; margin-bottom:10%;">No esperes hasta tu cita normal, ya que esto puede atrasar el tiempo de tratamiento.</p>

                </div>

                    </div>
                  </div>
                </div>
            </div>
        </div>
    </main>


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
  