@extends('layouts.back')

@section('title', 'Détail de l\'employé')

@section('content')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Détail de l'employé</h2>
            <a href="{{ route('employee_back') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('storage/' . $employe->img) }}" alt="" class="rounded me-3"
                        style="width:100px; height:100px; object-fit:cover;">
                    <h5 class="card-title">{{ $employe->prenom }} {{ $employe->nom }}</h5>
                </div>
                <p class="card-text"><strong>Téléphone :</strong> {{ $employe->numero_telephone }}</p>
                <p class="card-text"><strong>Email :</strong> {{ $employe->email }}</p>
                <p class="card-text"><strong>Poste :</strong> {{ $employe->poste }}</p>
                <p class="card-text"><strong>Rôle :</strong> {{ $employe->role }}</p>
                <p class="card-text"><strong>Salaire :</strong> {{ number_format($employe->salaire, 2, ',', ' ') }} €</p>
                <p class="text-muted mt-3"><small>Employé ajouté le :
                        {{ $employe->created_at->format('d/m/Y H:i') }}</small></p>
                <a class="btn btn-warning d-inline-block me-3"
                    href="{{ route("employee_edit_back", $employe->id) }}">Modifier</a>
                <form action="{{ route('employee_destroy_back', $employe->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer cet employé</button>
                </form>

            </div>
        </div>
    </div>
@endsection