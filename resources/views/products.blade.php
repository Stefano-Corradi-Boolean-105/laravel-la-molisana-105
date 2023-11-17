@extends('layouts.main')

@section('content')


    <h1>I miei prodotti</h1>

    <div class="cards-wrapper container">

        @forelse ($products as $product)
            <div class="card">
                    <a href="{{ route('productDetail', ['slug' => $product['slug']]) }}">
                        <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                        <h4>{{ $product['titolo'] }}</h4>
                    </a>
            </div>
        @empty
             <h2>Non ci sono prodotti</h2>
        @endforelse



    </div>



@endsection

@section('title')
    | Prodotti
@endsection
