@extends('layouts.app')

@section('content')
<main class="py-4">

    <div class="container">
        <div class="row">
            <div class="col-12">
        </div>
        </div>
    </div>


<div class="container">
<div class="row">
<div class="col-lg-10 offset-lg-1">
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                Registrarse
                <div class="pull-right">
                    <a href="/" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="Back to users">
                        <i class="fa fa-fw fa-reply-all" aria-hidden="true"></i>
                        <span class="hidden-sm hidden-xs">Volver al </span><span class="hidden-xs">Inicio</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="/drivers" accept-charset="UTF-8" role="form" class="needs-validation"><input name="_token" type="hidden" value="VU8f1YWsplMo5uJjxy43CyiLXF42765sxB6ft1xf">
                @csrf

                <div class="form-group has-feedback row ">
                    <label for="email" class="col-md-3 control-label">Correo electrónico</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="email" class="form-control" placeholder="Correo electrónico" name="email" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="name" class="col-md-3 control-label">Usuario</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="name" class="form-control" placeholder="Nombre de Usuario" name="name" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="first_name" class="col-md-3 control-label">Nombre</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="first_name" class="form-control" placeholder="Nombre" name="first_name" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="last_name" class="col-md-3 control-label">Apellido</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="last_name" class="form-control" placeholder="Apellido" name="last_name" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="cedula" class="col-md-3 control-label">Cédula</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="cedula" class="form-control" placeholder="Cédula" name="cedula" type="text">
                        </div>
                    </div>
                </div>

                <!-- Pasaporte -->
                <div class="form-group has-feedback row ">
                    <label for="pasaporte" class="col-md-3 control-label">Pasaporte</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="cedula" class="form-control" placeholder="Pasaporte" name="pasaporte" type="text">
                        </div>
                    </div>
                </div>

                <!-- Género -->
                <div class="form-group has-feedback row ">
                    <label for="genero" class="col-md-3 control-label">Género</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="genero" class="form-control" placeholder="Género" name="genero" type="text">
                        </div>
                    </div>
                </div>

                <!-- Dirección -->
                <div class="form-group has-feedback row ">
                  <label for="direccion1" class="col-md-3 control-label">Dirección</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input id="direccion1" class="form-control" placeholder="Dirección" name="direccion1" type="text">
                    </div>
                  </div>
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="form-group has-feedback row ">
                    <label for="nacimiento" class="col-md-3 control-label">Fecha de Nacimiento</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="genero" class="form-control" placeholder="Fecha de Nacimiento" name="nacimiento" type="date">
                        </div>
                    </div>
                </div>

                <!-- Teléfono -->
                <div class="form-group has-feedback row ">
                    <label for="telefono" class="col-md-3 control-label">Teléfono</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="telefono" class="form-control" placeholder="Teléfono" name="telefono" type="text">
                        </div>
                    </div>
                </div>

                <!-- Celular -->
                <div class="form-group has-feedback row ">
                    <label for="celular" class="col-md-3 control-label">Celular</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="celular" class="form-control" placeholder="Celular" name="celular" type="text">
                        </div>
                    </div>
                </div>

                <!-- Número de Deposito -->
                <div class="form-group has-feedback row ">
                    <label for="num_deposito" class="col-md-3 control-label">Número de Depósito</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="num_deposito" class="form-control" placeholder="Número de Depósito" name="num_deposito" type="text">
                        </div>
                    </div>
                </div>

                <!-- Privacidad -->
                <div class="form-group has-feedback row ">
                    <label for="p_privacidad" class="col-md-3 control-label">Acepto terminos de Privacidad</label>
                    <div class="col-md-1">
                        <div class="input-group">
                            <input id="p_privacidad" class="form-control" placeholder="Acepto terminos de Privacidad" name="p_privacidad" type="checkbox">
                        </div>
                    </div>
                </div>

                <!-- Confidencialidad -->
                <div class="form-group has-feedback row ">
                    <label for="a_confidencialidad" class="col-md-3 control-label">Confidencialidad</label>
                    <div class="col-md-1">
                        <div class="input-group">
                            <input id="a_confidencialidad" class="form-control" placeholder="Confidencialidad" name="a_confidencialidad" type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="password" class="col-md-3 control-label">Contraseña</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="password" class="form-control " placeholder="Contraseña" name="password" type="password" value="">
                            <div class="input-group-append">
                                <label class="input-group-text" for="password">
                                    <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group has-feedback row ">
                    <label for="password_confirmation" class="col-md-3 control-label">Confirmar Contraseña</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" type="password" value="">
                            <div class="input-group-append">
                                <label class="input-group-text" for="password_confirmation">
                                    <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                                                        </div>
                </div>
                <button class="btn btn-success margin-bottom-1 mb-1 float-right" type="submit">Create New User</button>
            </form>
        </div>

    </div>
</div>
</div>
</div>


</main>
@endsection
