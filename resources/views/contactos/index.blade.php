@extends('contactos.template')

@section('contenido')
  <br>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
      
          <div class="panel panel-default">
              
              <div class="panel-heading">   Contactenos</div>
         
            <br>
            <!-- /.box-header -->
            <!-- form start -->
             <div class="panel-body">
        <form method="POST" action="">
              <div class="box-body">
               
          
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                   <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <br>
                <div class="form-group">
                  <label>Mail</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <br>
                <!-- textarea -->
                <div class="form-group">
                  <label>Comentario</label>
                  <textarea id="comentario" class="form-control{{ $errors->has('comentario') ? ' is-invalid' : '' }}" name="comentario" value="{{ old('comentario') }}" required autofocus></textarea>
                  @if ($errors->has('comentario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comentario') }}</strong>
                                    </span>
                                @endif
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
    
      </div>
</div>


@endsection