@extends('layouts.back')

@section('title', 'Détail du produit')

@section('content')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Détail du produit</h2>
            <a href="{{ route('product_back') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ $product->img }}" alt="" class="rounded me-3"
                        style="width:100px; height:100px; object-fit:cover;">
                    <h5 class="card-title">{{ $product->nom }}</h5>
                </div>
                <p class="card-text"><strong>Type :</strong> {{ $product->type }}</p>
                <p class="card-text"><strong>Descriptif :</strong> {{ $product->descriptif }}</p>
                <p class="card-text"><strong>Prix :</strong> {{ number_format($product->prix, 2, ',', ' ') }} €</p>
                <p class="text-muted mt-3"><small>Ajouté le : {{ $product->created_at->format('d/m/Y H:i') }}</small></p>
                <a class="btn btn-warning d-inline-block me-3"
                    href="{{ route("product_edit_back", $product->id) }}">Modifier</a>
                <form action="{{ route('product_destroy_back', $product->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer ce produit</button>
                </form>
            </div>
        </div>
    </div>
@endsection