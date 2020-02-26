<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Odontologia Medica Coral</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/toastr.css" rel="stylesheet">
  <script src="css/toastr.js"></script>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <div id="fb-root"></div>
  <!-- boxed bg -->
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
@if(session('status'))
<script> 
toastr.success('{{ session("status") }}','Notificacion');
</script> 
@endif

@if(session('fail'))
<script> 
toastr.error('{{ session("fail") }}','Notificacion');
</script> 
@endif
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div class="se-pre-con"></div>
  <div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="border: none;
    border-radius: 40px 40px;  ">
      <div class="top-area">
        <div class="container">
          <div class="row" >
            <div class="col-sm-6 col-md-12 text-center">
            <img src="/assets/img/logo.png" alt="" class="img-fluid" height="80" width="340"/>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
              </div>
<div class="container">
  <div class="row">
    <!--<div class="col-md-12">
    Collect the nav links, forms, and other content for toggling 
    <div class="col-md-4"></div>-->
    <div class="col-md-12">
        <div class="collapse navbar-collapse face navbar-main-collapse shadow-lg" style="border-radius: 0.9;">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Inicio</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" style="font-family: 'Oxygen', sans-serif;" aria-expanded="false"
                    style="font-family: 'Oxygen', sans-serif;">Tratamientos <i class="fas fa-sort-down"></i></a>
                <div class="dropdown-menu"  style="border-radius: 20px;">
                    <a class="dropdown-item" href="sistemadamon"
                        style="font-family: 'Oxygen', sans-serif;">Sistema Damon</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="ortodonciainvisible"
                        style="font-family: 'Oxygen', sans-serif;">Ortodoncia
                        Invisible</a>
                    <a class="dropdown-item" href="ortodonciaacelerada"
                        style="font-family: 'Oxygen', sans-serif;">Ortodoncia
                        Acelerada</a>
                    <!-- <a class="dropdown-item" href="#" style="font-family: 'Oxygen', sans-serif;">Ortodoncia
                        Personalizada</a> -->
                    <a class="dropdown-item" href="ortodonciaaedadestempranas"
                        style="font-family: 'Oxygen', sans-serif;">Ortodoncia Edades
                        Tempranas</a>
                    <a class="dropdown-item" href="miniimplantesparaortodoncia"
                        style="font-family: 'Oxygen', sans-serif;">Mini Implantes
                        Ortodoncia</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="blanqueamiento"
                        style="font-family: 'Oxygen', sans-serif;">Blanqueamiento</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-primary" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" style="font-family: 'Oxygen', sans-serif;" aria-expanded="false"
                  style="font-family: 'Oxygen', sans-serif;">Pacientes <i class="fas fa-sort-down"></i></a>
              <div class="dropdown-menu" style="border-radius: 20px;">
                  <a class="dropdown-item" href="primeravisita"
                      style="font-family: 'Oxygen', sans-serif;">Primera Visita</a>
                  <a class="dropdown-item" href="emergencias"
                      style="font-family: 'Oxygen', sans-serif;">Emergencias</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="QuenoshaceUnidos"
                      style="font-family: 'Oxygen', sans-serif; ">Que nos hace
                      Unicos</a><br>
                  <a class="dropdown-item" href="politicasdelconsultorio"
                      style="font-family: 'Oxygen', sans-serif; ">Politicas del
                      Consultorio</a><br>
                  <a class="dropdown-item" href="alimentosquehayqueevitar"
                      style="font-family: 'Oxygen', sans-serif; color:orange;">Alimentos que hay
                      que evitar</a><br>
                  <a class="dropdown-item" href="#" style="font-family: 'Oxygen', sans-serif; ">Galeria
                      Fotografica</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="preguntasfrecuentes" style="font-family: 'Oxygen', sans-serif;">Preguntas
                      Frecuentes</a>
                   </div>
                  </li>
          <li class="navbar-item "><a href="promociones" class="nav-link text-primary">Promociones</a></li>
          <li class="navbar-item "><a href="casosdeexito" class="nav-link text-primary">Casos de Exito</a>
          </li>

          <li class="navbar-item "><a href="quienes" class="nav-link text-primary">Quienes Somos</a></li>

            <li><a  data-toggle="modal"  data-target="#modelId" href="#ubicanos">Ubicanos</a></li>
            <!--
              @if (Auth::guest())
              <li><a data-toggle="modal" href="#login" data-target="#modallogin">login</a></li>
              @else
              <li><a href="/home"> {{ Auth::user()->name }}</a></li>
              @endif-->
              <li class="ml-5"><a data-toggle="modal" data-target="#modalreservar" style="color:orange;">Haz tu Cita</a></li>
            </ul>
          </div>
    </div>
    </div>
  </div>
</div> 
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- Modal -->
    <div class="modal fade rounded" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-md rounded" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubicanos en</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-text">
                        <p class="text-info"> <a
                                href="https://wego.here.com/directions/mix/mylocation/e-eyJuYW1lIjoiT2RvbnRvbG9nXHUwMGVkYSBNXHUwMGU5ZGljYSBDb3JhbCIsImFkZHJlc3MiOiJBdiBDb3JhbCAxMDIxLCBMYXMgSm95YXMsIFNhbiBMdWlzIFBvdG9zXHUwMGVkIENpdHkiLCJsYXRpdHVkZSI6MjIuMTM2NzMwMzk3NDMyLCJsb25naXR1ZGUiOi0xMDAuOTQ1NTgwMDA1NjUsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTkyMTMzMDg4MDc4NzA1fQ==?map=22.13673,-100.94558,15,normal&fb_locale=es_LA">Av
                                Coral 1021, Las Joyas, 78399 San Luis Potosí City
                            </a>
                        </p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.719829504153!2d-100.94741348552682!3d22.136655454410327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa3d8da3c95df%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1566536008522!5m2!1ses!2smx" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><a style="color:white;"
                            href="https://wego.here.com/directions/mix/mylocation/e-eyJuYW1lIjoiT2RvbnRvbG9nXHUwMGVkYSBNXHUwMGU5ZGljYSBDb3JhbCIsImFkZHJlc3MiOiJBdiBDb3JhbCAxMDIxLCBMYXMgSm95YXMsIFNhbiBMdWlzIFBvdG9zXHUwMGVkIENpdHkiLCJsYXRpdHVkZSI6MjIuMTM2NzMwMzk3NDMyLCJsb25naXR1ZGUiOi0xMDAuOTQ1NTgwMDA1NjUsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTkyMTMzMDg4MDc4NzA1fQ==?map=22.136730397432,-100.94558000565,15,normal&fb_locale=es_LA">LLevame</a>
                    </button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+524444081327" class="float face" target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>
@yield('menu')