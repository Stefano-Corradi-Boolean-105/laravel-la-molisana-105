@extends('layouts.main')

@section('content')


    <div class="cards-wrapper container">

        <div class="product-detail">
            <h1>{{ $product['titolo'] }}</h1>
        <img src="{{ $product['src-p'] }}">
        <h4>
            Tipo: {{ $product['tipo'] }} | Cottura: {{ $product['cottura'] }}| Peso: {{ $product['peso'] }}
        </h4>
        <p>
            {!! $product['descrizione'] !!}
        </p>
        </div>


    </div>



@endsection

@section('title')
    | Homepage
@endsection
