@extends('adm.señalizaciones.modificar.template')

@section('contenido')
<div class="col-sm-12">

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MODIFICAR SEÑAL
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

 <form class="form-horizontal" method="POST" action="{{ route('modificarSeñal') }}" files="true" enctype="multipart/form-data"> @csrf
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">SEÑAL</h3>
              <div class="col-sm-12 col-md-offset-1">
                      
                        <img src="{{ $señalizacione->imagen }}" height="80%" width="80%" id="imgSalida">
                   
                     

                      <input type="file"  name="file" id="file" accept="image/*">  
                    
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
                      <input id="id" name="id" type="hidden" TYPE="text" value="{{$señalizacione->id}}">
                      <input id="detalle" type="text" autocomplete="off" value="{{$señalizacione->detalle}}" class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}" name="detalle" value="{{ old('detalle') }}" required autofocus"  placeholder="detalle">

                                @if ($errors->has('detalle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('detalle') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Codigo</label>

                    <div class="col-sm-10">
                      <input id="codigo" type="text" autocomplete="off" value="{{$señalizacione->codigo}}" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" required autofocus"  placeholder="codigo">

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
                      <select class="form-control select2" name="tipo" id="tipo">
                 
                         
                  
                            @if ($señalizacione->id_tipo==2)
                            <option selected="selected">VERTICAL </option>
                            <option >INFORMATIVA</option>
                            @else
                            <option selected="selected">HORIZONTAL</option>
                            <option >RESTRICTIVA</option>
                            @endif
                
                
                </select>
                    </div>
                  </div>
                <br>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Categoria</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" id="categoria" name="categoria">

                      
                      @if ($señalizacione->id_categoria==2)
                            <option selected="selected">RESTRICTIVA</option>
                            <option >HORIZONTAL</option>
                            @else
                            <option selected="selected">INFORMATIVA</option>
                            <option >VERTICAL</option>
                            @endif
               
               
                  
                </select>
                    </div>
                  </div>
                
                  <br>
                   <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>



            
              <!-- /.tab-pane -->
      
          <!-- /.nav-tabs-custom -->
        </div>
      </div>
    </div>
  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection