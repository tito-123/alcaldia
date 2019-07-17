@extends('adm.contribuciones.template')

@section('contenido')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
     <!-- Content Header (Page header) -->
  
   <br>
   <div class="panel">
              
              <div class="panel-heading">  <h1>Gestionar Contribuciones</h1> </div>
         
            <br>
  <div class="panel-body">
 

    <!-- Main content -->
    <section class="content">

    
               
                  <form method="GET" action="#">
                        @csrf

                          <div class="box-body">
                            
          
                  </form>
           
          
         <div class="hero-callout">
                <table  id="mydatatable" class="Display" style="width:100%">
                  <thead align="center">
                    <th >
                      ID
                    </th>
                    <th >
                      OBSERVACION
                    </th>
                    <th >
                      FECHA
                    </th>
                    <th >
                      USUARIO
                    </th>
                      
                    
                     <th >ACCION</th>
                  </thead>
                    <tbody align="center">
                          
                       @foreach($insidencias as $insidencia)
                        <tr>
                            <td>{{ $insidencia->id }}</td>
                            <td><h3>{{ $insidencia->observacion }}</h3></td>
                            <td><h3>{{ $insidencia->fecha }}</h3></td>
                             <td><h3>{{ $insidencia->id_usuario }}</h3></td>

                           
                                <td align="center">
                                          
                                                <a href=""    title="modificar"  class="btn btn-link"><i class="fa fa-pencil fa-lg"></i></a>
 
                                                <a href="" onclick="return confirm('esta seguro que desea eliminar')" class="btn btn-link"><i   title="eliminar" class="fa fa-trash-o fa-lg"></i></a>

                                                  <a onclick="verimagen()" data-id="{{$insidencia->imagen}}" class="btn btn-link"><i   title="visualizar" class="fa fa-eye fa-lg"></i></a>
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