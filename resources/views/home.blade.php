@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    <section id="section_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="homepage_banner text-center">
                        <img src="{{asset('img/molisana-home.jpg')}}" alt="La Molisana_home">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_3">
        <div class="midsection_title text-center">
            <h4>la molisana: pasta e farine di qualità</h4>
        </div>
    </section>
@endsection