<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
       <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
 
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Styles -->
    <script src="/dist/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="/dist/css/sweetalert2.min.css">
 <link href="{{ asset('css/miestilo.css') }}" rel="stylesheet">

  

    </head>

    <body>
     
     
        <nav class="navbar navbar-expand-sm top-bar sps sps--abv">
        <div class="container-fluid">
  <button class="navbar-toggler pull-left " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand justify-content-center" href="#"><span>MGS</span>Online</a>
  <div class="collapse navbar-collapse mx-auto" id="navbarNav">
   <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link " href="{{ route('general') }}"><span class="glyphicon glyphicon-home"></span> General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('mapa') }}"><span class="glyphicon glyphicon-search"></span>  Visualizacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contactos') }}"><span class="glyphicon"></span> Contactos</a>
      </li>
    
    </ul>

    <ul class="navbar-nav ml-auto">
       <li class="dropdown">

            
        <a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a>


     </li>
     
    </ul>

  </div>

  
    </div>
</nav>

<br>
<section>
<div class="col-sm-12">

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
   
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <a href="#">SEÑALIZACION Y MOVILIDAD URBANA</a>
      </h1>
     
    </section>
    
       <section class="content">

      <div class="row">
          <div class="col-md-6">

          <div class="nav-tabs-custom">
            
            <div class="tab-content">
                <div class="user-block">
               <span class="username">
                             <h1><a href="#">Problemas frecuentes</a></h1>
            
                        </span>
                          </div>
                          <br>
              <img class="img-responsive" src="/img/poste-en-mal-estado.jpg" alt="user image">
              <!-- /.tab-pane -->
              <br>
          <p >
                    Las señalizaciones defectuosas de la ciudad no reciben un matenimiento oportuno, debido a muchos factores, como ser: ciudad en crecimiento, no se reportan los casos, etc...
                    esto puede traer consecuencias a corto y largo plazo, caos vehicular o incluso accidentes de transito..
                  </p>
              <!-- /.tab-pane -->

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
          <div class="col-md-6">


          <div class="nav-tabs-custom">
            
            <div class="tab-content">
                <div class="user-block">
               <span class="username">
                         <h1> <a href="#">Educacion Vial Inadecuada</a></h1>
            
                        </span>
                          </div>
                          <br>
              <img class="img-responsive" src="/img/micro.jpg"  alt="user image">
              <!-- /.tab-pane -->
              <br>
          <p>
                   Tanto como conductores y peatones se beneficiarian de recibir mayor informacion acerca de normas basicas de educacion vial.

                  </p>
              <!-- /.tab-pane -->

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>

  <h1>Señales de transito</h1>

<div class="col-md-8 col-md-offset-5">

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<div class="carousel-item active">
      <img class="d-block w-25" src="/img/Pare.png">
    </div>
@foreach($senals as $senal)

    <div class="carousel-item">
      <img class="d-block w-25" src="{{ $senal->imagen }}">
    </div>
    
 @endforeach

  </div>
</div>
</div>





    
  <!-- /.content-wrapper -->
</div>
           
       </section>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
    </body>
</html>
