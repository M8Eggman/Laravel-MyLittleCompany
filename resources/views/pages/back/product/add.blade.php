@extends('layouts.back')

@section('title', 'Ajouter un produit')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Ajouter un produit</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product_store_back') }}" method="POST" enctype="multipart/form-data"
            class="d-flex flex-column gap-3">
            @csrf

            <div>
                <label for="nom" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nom" maxlength="70" value="{{ old("nom") }}"
                    required>
                <p class="m-0 small text-muted">Maximum 70 caractères</p>
            </div>

            <div>
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="30" value="{{ old("type") }}"
                    required>
                <p class="m-0 small text-muted">Maximum 30 caractères</p>
            </div>

            <div>
                <label for="descriptif" class="form-label">Descriptif</label>
                <input type="text" class="form-control" id="descriptif" name="descriptif" maxlength="50"
                    value="{{ old("descriptif") }}" required>
                <p class="m-0 small text-muted">Maximum 50 caractères</p>
            </div>

            <div>
                <label for="prix" class="form-label">Prix (€)</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ old("prix") }}" required>
            </div>

            <div>
                <label for="img" class="form-label">Image du produit</label>
                <input type="file" class="form-control" id="img" name="img" value="{{ old("img") }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection