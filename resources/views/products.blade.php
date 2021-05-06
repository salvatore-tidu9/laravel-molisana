@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="title text-center">
        <h2>i nostri prodotti</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($paste as $pasta)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card_container">
                    <div class="card_container_wrapper">
                        <h5>{{$pasta['titolo']}}</h5>
                        <h6>Tipo: {{$pasta['tipo']}}</h6>
                        <h6>Cottura: {{$pasta['cottura']}}</h6>
                        <h6>Peso: {{$pasta['peso']}}</h6>
                        <i class="fas fa-utensils"></i>
                    </div>
                    <img src="{{$pasta['src']}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection