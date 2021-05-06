@extends('layouts.app')

@section('title', 'News')

@section('content')
    <div class="title text-center">
        <h2>news</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($notizie as $notizia)
                <div class="col-xs-12">
                    <h3 class="n_title">{{$notizia['titolo']}}</h3>
                    <p class="n_paragraph">{{$notizia['paragrafo']}}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection