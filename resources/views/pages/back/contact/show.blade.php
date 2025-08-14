@extends('layouts.back')

@section('title', 'Détail du message')

@section('content')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Détail du message</h2>
            <a href="{{ route('contact_back') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Message de {{ $message->prenom }} {{ $message->nom }}</h5>
                <p class="card-text"><strong>Téléphone :</strong> {{ $message->tel }}</p>
                <p class="card-text"><strong>Email :</strong> {{ $message->mail }}</p>
                <p class="card-text"><strong>Sujet :</strong> {{ $message->sujet }}</p>
                <p class="card-text"><strong>Message :</strong></p>
                <div class="p-3 border rounded bg-light">
                    {{ $message->message }}
                </div>
                <p class="text-muted mt-3"><small>Envoyé le : {{ $message->created_at->format('d/m/Y H:i') }}</small></p>
                <a class="btn btn-warning d-inline-block me-3"
                    href="{{ route("contact_edit_back", $message->id) }}">Modifier</a>
                <form action="{{ route('contact_show_back', $message->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer ce message</button>
                </form>
            </div>
        </div>
    </div>
@endsection