@extends('layouts.back')

@section('title', 'Produits')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Liste des produits</h2>
            <a href="{{ route('product_add_back') }}" class="btn btn-primary">Ajouter produit</a>
        </div>
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Descriptif</th>
                    <th>Prix (€)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td>
                            <img src="{{ asset('images/produits/' . $produit->img) }}" alt="{{ $produit->nom }}"
                                style="width:50px; height:50px; object-fit:cover; border-radius:5px;">
                        </td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->type }}</td>
                        <td>{{ $produit->descriptif }}</td>
                        <td>{{ number_format($produit->prix, 2, ',', ' ') }}</td>
                        <td>
                            <form action="{{ route('product_destroy_back', $produit->id) }}" method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection