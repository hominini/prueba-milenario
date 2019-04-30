@extends('layouts.app')

@section('template_title')
    {{ Auth::user()->name }}'s' Homepage
@endsection

@section('template_fastload_css')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">

              <div class="card">
                  <div class="card-header @role('admin', true) bg-secondary text-white @endrole">
                      Bienvenido {{ Auth::user()->name }}
                  </div>
                  <div class="card-body">
                      <h3> Mis Referidos </h3>
                      @forelse ($asignados as $asignado)

                          <div class="box box-default bg-white p-2 mr-4 mb-3 rounded shadow" >
                              {{ $asignado->correo_referido }}
                          </div>

                      @empty
                          <p>No ha referido a nadie.</p>
                      @endforelse

                  </div>
                  <a href="/asignaciones/create">Recomendar subscripción</a>
              </div>

              <div class="card">
                  <div class="card-body">
                      @if ($patrocinador)
                      <br>
                      <h3> Mi Pratocinador </h3>
                          <b>Nombre: </b><p>{{ $patrocinador->name }}</p>
                          <b>Email: </b><p>{{$patrocinador->email}}</p>
                      @else
                          <p>No tiene patrocinador</p>
                      @endif
                  </div>
              </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_scripts')
@endsection
