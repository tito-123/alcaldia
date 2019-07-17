@extends('adm.usuarios.gestionar.template')

@section('contenido')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
     <!-- Content Header (Page header) -->
       <ul class="nav">
  <li class="nav-item">
    <a class="nav-link " id="grande" href="{{ route('registarUsuView') }}"><span class="glyphicon glyphicon-plus-sign"></span> Añadir usuario</a>
  </li>
  
</ul>
   <br>
   <div class="panel">
              
              <div class="panel-heading">  <h1>Gestionar Usuarios</h1> </div>
         
            <br>
  <div class="panel-body">
 

    <!-- Main content -->
    <section class="content">

    
               
                  <form method="GET" action="{{ route('listar') }}">
                        @csrf

                          <div class="box-body">
                            
              <div class="row">
                <div class="col-md-8 col-md-offset-9">
                <div class="col-xs-4">
                  <div class="input-group mb-3">
  <input type="text" class="form-control" id="name" name="name" placeholder="name" aria-label="Recipient's username" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit">buscar</button>
  </div>
</div>
                </div>
              
               
              </div>
            </div>
                  </form>
           
          
        
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <th>
                      ID
                    </th>
                    <th>
                      NOMBRE
                    </th>
                    <th>
                      EMAIL
                    </th>
                     <th>Accion</th>
                  </thead>
                    <tbody>
                           @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                                <td align="center">
                                              
                                                <a href="" class="btn btn-link"><i   title="privilegios" class="fa fa-building fa-lg"></i></a>

                                                <a href="{{route('parametroUsuario', $user->id)}}"    title="modificar"  class="btn btn-link"><i class="fa fa-pencil fa-lg"></i></a>
 
                                                <a href="{{route('eliminarUsu', $user->id)}}" onclick="return confirm('esta seguro que desea eliminar')" class="btn btn-link"><i   title="eliminar" class="fa fa-trash-o fa-lg"></i></a>
                               </td>
                        </tr>
                           @endforeach
                    </tbody>
                </table>
              <div class="col-md-8 col-md-offset-5">
                

              </div>
            
            
        
  

          </section>
        </div>
     </div>
</div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

<!-- ./wrapper -->
@endsection