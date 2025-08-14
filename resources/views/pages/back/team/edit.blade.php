@extends('layouts.back')

@section('title', 'Modifier un employé')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Modifier un employé</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employee_update_back', $employe->id) }}" method="POST" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')

            <div>
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $employe->nom) }}"
                    required>
            </div>

            <div>
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"
                    value="{{ old('prenom', $employe->prenom) }}" required>
            </div>

            <div>
                <label for="numero_telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="numero_telephone" name="numero_telephone"
                    value="{{ old('numero_telephone', $employe->numero_telephone) }}" required>
            </div>

            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employe->email) }}"
                    required>
            </div>

            <div>
                <label for="poste" class="form-label">Poste</label>
                <select class="form-select" id="poste" name="poste" required>
                    @foreach (["Logistique", "Réception", "Comptabilité", "Vente", "Direction"] as $poste)
                        <option value="{{ $poste }}" {{ old('poste', $employe->poste) == $poste ? 'selected' : '' }}>{{ $poste }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="role" class="form-label">Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    @foreach (["Ouvrier polyvalent", "Employé polyvalent", "Comptable", "Assistant du régional manager", "Régional manager"] as $role)
                        <option value="{{ $role }}" {{ old('role', $employe->role) == $role ? 'selected' : '' }}>{{ $role }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="salaire" class="form-label">Salaire (€)</label>
                <input type="number" class="form-control" id="salaire" name="salaire" step="0.01"
                    value="{{ old('salaire', $employe->salaire) }}" required>
            </div>

            <div>
                <label for="img" class="form-label">Image</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ old('img', $employe->img) }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection