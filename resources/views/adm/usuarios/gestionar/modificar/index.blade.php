@extends('adm.usuarios.gestionar.modificar.template')

@section('contenido')
<div class="col-sm-12">

  <!-- Content Wrapper. Contains page content -->
  <div class="content content-wrapper">
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MODIFICAR USUARIO
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
<br>
<br>
 <form class="form-horizontal" method="POST" action="{{ route('modificarUsuario', $user->id) }}" files="true" enctype="multipart/form-data"> @csrf
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">FOTO</h3>
              <div class="col-sm-12 col-md-offset-1">
                      
                        <img src="{{$persona->foto}}" height="80%" width="80%" id="imgSalida">
                   
                     <br>
                       <br>

                      <input type="file"  name="file" id="file" >
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
              <h3 class="profile-username text-center">INFORMACION PERSONAL</h3>
        <div class="col-md-9 col-md-offset-1" >
         
               
 <br>
  <div class="dropdown-divider"></div>
 <br>

           <div class="form-group row">

                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" value="{{$persona->nombre}}" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apPaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="apPaterno" type="text" value="{{$persona->ap_paterno}}" class="form-control{{ $errors->has('apPaterno') ? ' is-invalid' : '' }}" name="apPaterno" value="{{ old('apPaterno') }}" required autofocus>

                                @if ($errors->has('apPaterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apPaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="apMaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="apMaterno" type="text" value="{{$persona->ap_materno}}"  class="form-control{{ $errors->has('apMaterno') ? ' is-invalid' : '' }}" name="apMaterno" value="{{ old('apMaterno') }}" required autofocus>

                                @if ($errors->has('apMaterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apMaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">{{ __('C.I.') }}</label>

                            <div class="col-md-6">
                                <input id="ci" type="text" value="{{$persona->ci}}" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ old('ci') }}" required autofocus>

                                @if ($errors->has('ci'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
    <h3 class="profile-username text-center">INFORMACION DE USUARIO</h3>

    <br>
  <div class="dropdown-divider"></div>
 <br>


                  <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NickName') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$user->name}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value="{{$user->email}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

 <br>
  <div class="dropdown-divider"></div>
 <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">GUARDAR</button>
                    </div>
                  </div>
              


            
              <!-- /.tab-pane -->
      
          <!-- /.nav-tabs-custom -->

        </div>
      </div>
    </div>
  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection