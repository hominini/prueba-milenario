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
                Referir
                <div class="pull-right">
                    <a href="/" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="Back to users">
                        <i class="fa fa-fw fa-reply-all" aria-hidden="true"></i>
                        <span class="hidden-sm hidden-xs">Volver al </span><span class="hidden-xs">Inicio</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="/asignaciones" accept-charset="UTF-8" role="form" class="needs-validation"><input name="_token" type="hidden" value="VU8f1YWsplMo5uJjxy43CyiLXF42765sxB6ft1xf">
                @csrf

                <div class="form-group has-feedback row ">
                    <label for="cedula" class="col-md-3 control-label">Cedula del Referido</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="cedula" class="form-control" placeholder="Cedula del Referido" name="cedula" type="text">
                        </div>
                    </div>
                </div>

                <button class="btn btn-success margin-bottom-1 mb-1 float-right" type="submit">Referir</button>
            </form>
        </div>

    </div>
</div>
</div>
</div>


</main>
@endsection
