@extends('layouts.back')

@section('title', 'Nos produits')

@section('content')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Liste des employés</h2>
            <a href="{{ route('employee_add_back') }}" class="btn btn-primary">Ajouter un employé</a>
        </div>
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Poste</th>
                    <th>Rôle</th>
                    <th>Salaire (€)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employes as $employe)
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>
                            <img src="{{ $employe->img }}" alt="{{ $employe->nom }}"
                                style="width:50px; height:50px; object-fit:cover; border-radius:50%;">
                        </td>
                        <td>{{ $employe->nom }}</td>
                        <td>{{ $employe->prenom }}</td>
                        <td>{{ $employe->numero_telephone }}</td>
                        <td>{{ $employe->email }}</td>
                        <td>{{ $employe->poste }}</td>
                        <td>{{ $employe->role }}</td>
                        <td>{{ number_format($employe->salaire, 2, ',', ' ') }}</td>
                        <td>
                            <form action="{{ route('employee_destroy_back', $employe->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Virer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection