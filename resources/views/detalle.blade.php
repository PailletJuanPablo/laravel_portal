@extends('layouts.global') 
@section('title', $escort->nombre) 
@section('contenido')

<div class="row">
    <div class="container-fluid detailTitle">
        {{$escort->nombre}}
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="escort-details-data-1">
            <ul class="dataul">
                <li>
                    <span class="detail-item">Altura:</span>
                    <span class="detail-value"> {{$escort->altura}} </span>
                </li>
                <li>
                    <span class="detail-item">Medidas:</span>
                    <span class="detail-value">{{$escort->medidas}}</span>
                </li>
                <li>
                    <span class="detail-item">Horarios:</span>
                    <span class="detail-value">{{$escort->horarios}}</span>
                </li>
                <li>
                    <span class="detail-item">Viajes:</span>
                    <span class="detail-value">{{$escort->viajes}}</span>
                </li>
                <li>
                    <span class="detail-item">Zona:</span>
                    <span class="detail-value">{{$escort->zona->nombre}}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="escort-details-data-2">
            <img src="https://www.sierrascalientes.com/images/whatsapp-icon.png">
            <span class="numero"> {{$escort->numero_telefono}} </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="detailContainer">
        <p style="width:100%">
            <img style="max-width: 100%" src="{{asset($escort->imagen_principal)}}">
        </p>

        <h3> Descripción </h3>

        <p class="description">
            {!! $escort->descripcion !!} </p>
    </div>
</div>
@endsection
