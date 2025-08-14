@extends('layouts.back')

@section('title', 'Modifier un produit')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Modifier un produit</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product_update_back', $product->id) }}" method="POST" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')

            <div>
                <label for="nom" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nom" maxlength="70"
                    value="{{ old('nom', $product->nom) }}" required>
            </div>

            <div>
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="30"
                    value="{{ old('type', $product->type) }}" required>
            </div>

            <div>
                <label for="descriptif" class="form-label">Descriptif</label>
                <input type="text" class="form-control" id="descriptif" name="descriptif" maxlength="50"
                    value="{{ old('descriptif', $product->descriptif) }}" required>
            </div>

            <div>
                <label for="prix" class="form-label">Prix (€)</label>
                <input type="number" class="form-control" id="prix" name="prix" step="0.01"
                    value="{{ old('prix', $product->prix) }}" required>
            </div>

            <div>
                <label for="img" class="form-label">Image</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ old('img', $product->img) }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection