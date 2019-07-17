@extends('adm.señalizaciones.registrar.template')

@section('contenido')
<div class="col-sm-12">

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        REGISTRAR SEÑAL
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

 <form class="form-horizontal" method="POST" action="{{ route('registrarSeñales') }}" files="true" enctype="multipart/form-data"> @csrf
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">SEÑAL</h3>
              <div class="col-sm-12 col-md-offset-1">
                      
                        <img src="/dist/img/arrowdown.png" height="80%" width="80%" id="imgSalida">
                   
                     

                      <input type="file"  name="file" id="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" value="{{ old('file') }}" required autofocus>  
                       @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
        
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
        <div class="col-md-9">
         <div class="col-md-11 col-md-offset-2" >
            <div class="form-group">
              @if(Session::has('message'))
            
                  <script type="text/javascript">
                               
                     $(document).ready(function() {
                swal.fire({ 
                  title: "Sussces",
                   text: "señalizacion ingresada con exito",
                    type: "success" 
                  }).then(function() {
                    // Redirect the user
                    window.location.href = "{{route('señalizaciones')}}";
                    })});
                    </script>
              @endif

              @if(Session::has('error'))

             <script type="text/javascript">
                               
          
                               
                     $(document).ready(function() {
                swal.fire({ 
                  title: "Error",
                   text: "{{Session::get('error')}}",
                    type: "error" 
                  })
              });
                  
                    </script>
              @endif

              

               </div>
               <br>

               
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Detalle</label>

                    <div class="col-sm-10">
                      <input id="detalle" type="text" autocomplete="off" class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}" name="detalle" value="{{ old('detalle') }}" required autofocus"  placeholder="detalle">

                                @if ($errors->has('detalle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('detalle') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="inputEmail"  class="col-sm-2 control-label">Codigo</label>

                    <div class="col-sm-10">
                      <input id="codigo" autocomplete="off" type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" required autofocus"  placeholder="codigo">

                                @if ($errors->has('codigo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tipo</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" name="tipo" id="tipo" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" value="{{ old('tipo') }}" required autofocus"  placeholder="tipo">
                   <option value="">SELECCIONE UNA OPCION</option>
                         @foreach($tipos as $tipo)
                   <option value="{{ $tipo->detalle }}">{{ $tipo->detalle }}</option>
               
                     @endforeach
                
                </select>

                                @if ($errors->has('tipo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                <br>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Categoria</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" id="categoria" name="categoria" class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" value="{{ old('categoria') }}" required autofocus"  placeholder="categoria">
                           <option value="">SELECCIONE UNA OPCION</option>
                         @foreach($categorias as $categoria)
                   <option value="{{ $categoria->detalle }}">{{ $categoria->detalle }}</option>
               
                @endforeach
                  
                </select>
                   @if ($errors->has('categoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                
                  <br>
                   <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">guardar</button>
                    </div>
                  </div>


                </div>
                </div>
                </div>
                </div>
                </div>
              </div>
                

                </form>



            
              <!-- /.tab-pane -->
      
          <!-- /.nav-tabs-custom -->
    
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection