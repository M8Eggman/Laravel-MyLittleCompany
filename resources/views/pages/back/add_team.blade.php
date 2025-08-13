@extends('layouts.back')

@section('title', 'Ajouter un employé')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Ajouter un employé</h2>

        <form action="{{ route('employee_store_back') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="mb-3">
                <label for="numero_telephone" class="form-label">Numéro de téléphone</label>
                <input type="text" class="form-control" id="numero_telephone" name="numero_telephone" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="poste" class="form-label">Poste</label>
                <select class="form-select" id="poste" name="poste" required>
                    <option value="">Sélectionner un poste</option>
                    <option value="Logistique">Logistique</option>
                    <option value="Réception">Réception</option>
                    <option value="Comptabilité">Comptabilité</option>
                    <option value="Vente">Vente</option>
                    <option value="Direction">Direction</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="">Sélectionner un rôle</option>
                    <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
                    <option value="Employé polyvalent">Employé polyvalent</option>
                    <option value="Comptable">Comptable</option>
                    <option value="Assistant du régional manager">Assistant du régional manager</option>
                    <option value="Régional manager">Régional manager</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="salaire" class="form-label">Salaire (€)</label>
                <input type="number" step="0.01" class="form-control" id="salaire" name="salaire" required>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Photo de l'employé</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection