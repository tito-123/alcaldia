
<nav class="navbar navbar-expand-sm top-bar sps sps--abv">
        <div class="container-fluid">
  <button class="navbar-toggler pull-left " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand justify-content-center" href="#"><span>MGS</span>Online</a>
  <div class="collapse navbar-collapse mx-auto" id="navbarNav">
   <ul class="navbar-nav mx-auto">
       <li class="nav-item active">
        <a class="nav-link" href="{{ route('inicio') }}"><span class="glyphicon glyphicon-home"></span>  Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios') }}"><span class="glyphicon glyphicon-user"></span> Usuarios</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contribuciones') }}"><span class="glyphicon glyphicon-search"></span>  Contribuciones</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('señalizaciones') }}"><span class="glyphicon"></span> Señalizaciones</a>
      </li>
    
    </ul>

    <ul class="navbar-nav ml-auto">
       <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
     
    </ul>

  </div>

  
    </div>
</nav>