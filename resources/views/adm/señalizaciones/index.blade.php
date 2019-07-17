@extends('adm.señalizaciones.template')

@section('contenido')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
     <!-- Content Header (Page header) -->
       <ul class="nav">
  <li class="nav-item">
    <a class="nav-link " id="grande" href="{{ route('vRegistrarSeñal') }}"><span class="glyphicon glyphicon-plus-sign"></span> Añadir Señal</a>
  </li>
  
</ul>
   <br>
   <div class="panel">
              
              <div class="panel-heading">  <h1>Gestionar Señales</h1> </div>

  <div class="panel-body">
 
         @if(Session::has('message'))
            
                  <script type="text/javascript">
                               
                     $(document).ready(function() {
                swal.fire({ 
                  title: "Confirmado",
                   text: "señalizacion eliminada con exito",
                    type: "success" 
                  })
              });
                    </script>
              @endif
@if(Session::has('modificar'))
            
                  <script type="text/javascript">
                               
                     $(document).ready(function() {
                swal.fire({ 
                  title: "Confirmado",
                   text: "señalizacion modificada con exito",
                    type: "success" 
                  })
              });
                    </script>
              @endif

              @if(Session::has('error'))
             <script type="text/javascript">
                               
                     $(document).ready(function() {
                swal.fire({ 
                  title: "Error",
                   text: "se produjo un error al eliminar",
                    type: "danger" 
                  })});
                    </script>
              @endif
    <!-- Main content -->
    <section class="content">

    
               
                  <form method="GET" action="{{ route('listar') }}">
                        @csrf

                          <div class="box-body">
                            
             
                  </form>
           
          
     <div class="hero-callout">
                <table  id="mydatatable" class="display" style="width:100%">
                  <thead  align="center">
                    <th >
                      ID
                    </th>
                    <th >
                      DETALLE
                    </th>
                    <th >
                      CODIGO
                    </th>
                  
                     <th >ACCION</th>
                  </thead>
                    <tbody align="center">
                           @foreach($senals as $senal)
                        <tr>
                            <td>{{ $senal->id }}</td>
                            <td><h3>{{ $senal->detalle }}</h3></td>
                            <td><h3>{{ $senal->codigo }}</h3></td>
                          
                                <td align="center">
                                          
                                                <a onclick="modificar()" data-id="{{$senal->id}}"   title="modificar"  class="btn btn-link"><i class="fa fa-pencil fa-lg"></i></a>
 
                                                <a onclick="eliminar()" data-id="{{$senal->id}}" class="btn btn-link"><i   title="eliminar" class="fa fa-trash-o fa-lg"></i></a>

                                                <a onclick="verimagen()" data-id="{{$senal->imagen}}" class="btn btn-link"><i   title="visualizar" class="fa fa-eye fa-lg"></i></a>

                               </td>
                        </tr>
                           @endforeach
                    </tbody>
                </table>
             
             </div>
            
            
        
  

          </section>
        </div>
     </div>
</div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

<!-- ./wrapper -->
@endsection