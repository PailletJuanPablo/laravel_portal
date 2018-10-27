@extends('layouts.global') 
@section('title', 'inicio') 
@section('contenido')

<div class="row">
    <div class="container-fluid homeTitle_destacadas">
        Destacadas
    </div>
    @foreach ($destacadas as $escort)
    <div class="col-md-2 col-sm-6 escortCard">
        <a href="{{route('escort', ['id' => $escort->id ])}}">
            <div class="imgContainer">
                <img src="{{$escort->imagen_principal}}"> </a>
        </div>
        <div class="titleContainer"> {{$escort->nombre}} </div>
        <div class="numberContainer"> {{$escort->numero_telefono}} </div>
    </div>
    @endforeach
</div>

<div class="row">
    <div class="container-fluid homeTitle_novedades">
        Novedades
    </div>
    @foreach ($escorts as $escort)
    <div class="col-md-2 col-sm-6 escortCard">
        <a href="{{route('escort', ['id' => $escort->id ])}}">
            <div class="imgContainer">
                <img src="{{$escort->imagen_principal}}"> </a>
        </div>
        <div class="titleContainer"> {{$escort->nombre}} </div>
        <div class="numberContainer"> {{$escort->numero_telefono}} </div>
    </div>
    @endforeach
</div>
@endsection