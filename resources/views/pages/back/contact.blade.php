@extends('layouts.back')

@section('title', 'Messages reçus')

@section('content')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Messages reçus</h2>
        </div>
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Expéditeur</th>
                    <th>Sujet</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->nom }} {{ $message->prenom }}</td>
                        <td>{{ $message->sujet }}</td>
                        <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $message->mail }}</td>
                        <td>
                            <form action="{{ route('contact_destroy_back', $message->id) }}" method="POST">
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