@extends('layouts.front')

@section('title', 'Contactez-nous')

@section('content')
    <div class="container py-4"> 
        <div class="d-flex align-items-start gap-4">
            <div class="w-50">
                <img src="/assets/img/office.jpg" alt="Photo d'office d'une entreprise" class="rounded w-100">
            </div>

            <div class="w-50">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="shadow-sm">
                    <div class="border rounded p-3">
                        <h3 class="mb-4">Contactez-nous</h3>
                        <form action="{{ route("contact_store_front") }}" method="POST" class="d-flex flex-column gap-3">
                            @csrf
                            <div>
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div>
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            <div>
                                <label for="tel" class="form-label">N°Téléphone</label>
                                <input type="text" class="form-control" id="tel" name="tel" required>
                            </div>

                            <div>
                                <label for="mail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="mail" name="mail" required>
                            </div>

                            <div>
                                <label for="sujet" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="sujet" name="sujet" maxlength="50" required>
                            </div>

                            <div>
                                <label for="message" class="form-label">Message</label>
                                <textarea style="resize: none" class="form-control" id="message" name="message" rows="4"
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-secondary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection