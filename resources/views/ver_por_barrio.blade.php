@extends('layouts.global') 
@section('title', $barrio->nombre) 
@section('contenido')


<div class="row">
    <div class="container-fluid homeTitle_seccion">
        {{$barrio->nombre}}
    </div>
    @foreach ($barrio->escorts as $escort)
    <div class="col-md-2 col-sm-6 escortCard">
        <a href="{{route('escort', ['id' => $escort->slug ])}}">
            <div class="imgContainer">
                <img src="{{asset($escort->imagen_principal)}}"> </a>
        </div>
        <div class="titleContainer"> {{$escort->nombre}} </div>
        <div class="numberContainer"> {{$escort->numero_telefono}} </div>
    </div>
    @endforeach
</div>
@endsection
