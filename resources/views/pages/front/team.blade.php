@extends('layouts.front')

@section('title', 'Notre équipe')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Notre équipe</h2>
        <div class="row">
            @foreach($employes as $employe)
                <div class="col-3 mb-4">
                    <div class="card h-100 shadow-sm" style="width: 18rem;">
                        <img src="{{ $employe->photo }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $employe->prenom }} {{ $employe->nom }}</h5>
                            <p class="card-text">{{ $employe->poste }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection