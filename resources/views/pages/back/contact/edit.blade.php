@extends('layouts.back')

@section('title', 'Modifier un message')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Modifier un message</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact_update_back', $message->id) }}" method="POST" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')

            <div>
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"
                    value="{{ old('prenom', $message->prenom) }}" required>
            </div>

            <div>
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $message->nom) }}"
                    required>
            </div>

            <div>
                <label for="tel" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel', $message->tel) }}"
                    required>
            </div>

            <div>
                <label for="mail" class="form-label">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" value="{{ old('mail', $message->mail) }}"
                    required>
            </div>

            <div>
                <label for="sujet" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="sujet" name="sujet" value="{{ old('sujet', $message->sujet) }}"
                    required>
            </div>

            <div>
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4"
                    required>{{ old('message', $message->message) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection