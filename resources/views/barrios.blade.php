@extends('layouts.global') 
@section('title', 'barrios') 
@section('contenido')

<div class="row">
    <div class="container-fluid homeTitle_novedades">
        Seleccione Barrio
    </div>
    <div class="barriosContainer"> 
    @foreach ($barrios as $barrio)
    <a href="{{route('ver_por_barrio', ['nombre' => $barrio->nombre ])}}" style="width: 100%">
            <h3 style="width: 100%"> {{$barrio->nombre }}</h3>
    </a>
    @endforeach
</div>
    </div>
@endsection