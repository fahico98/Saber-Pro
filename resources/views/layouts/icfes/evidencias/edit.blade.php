
@extends('template.template')

@section('contenido')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{asset('/icfes/evidencia')}}">Evidencias</a></li>
        <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
    </ol>
</nav>

<div class="card-body ">
    <div class="card spur-card">
        <div class="card-header">
            <div class="spur-card-icon">
                <i class="fas fa-chart-bar"></i>
            </div>
            <div class="spur-card-title"> Actualizar Afirmacion </div>
        </div>
        <div class="card-body ">
            <form action="{{ url('/icfes/evidencia/' . $evidencia->id) }}" class="form" method="POST">
                {{ csrf_field() }}
                @include('layouts.icfes.evidencias.form')
            </form>
        </div>
    </div>
</div>

@endsection
