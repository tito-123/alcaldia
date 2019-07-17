<nav class="navbar navbar-expand-sm top-bar sps sps--abv">
        <div class="container-fluid">
  <button class="navbar-toggler pull-left " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand justify-content-center" href="#"><span>MGS</span>Online</a>
  <div class="collapse navbar-collapse mx-auto" id="navbarNav">
   <ul class="navbar-nav mx-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('general') }}"><span class="glyphicon glyphicon-home"></span> General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('mapa') }}"><span class="glyphicon glyphicon-search"></span>  Visualizacion</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('contactos') }}"><span class="glyphicon"></span> Contactos</a>
      </li>
    
    </ul>

    <ul class="navbar-nav ml-auto">
       <li class="nav-item active">

            
        <a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a>


     </li>
     
    </ul>

  </div>

  
    </div>
</nav>
