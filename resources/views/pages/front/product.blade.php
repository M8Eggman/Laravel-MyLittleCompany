@extends('layouts.front')

@section('title', 'Nos produits')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Nos produits</h2>
        <div class="row">
            @foreach($produits as $produit)
                <div class="col-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $produit->img }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->nom }}</h5>
                            <p class="card-text">{{ $produit->descriptif }}</p>
                        </div>
                        <div class="card-footer">
                            <span class="fw-bold">{{ number_format($produit->prix, 2, ',', ' ') }} €</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection