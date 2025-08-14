@extends("layouts.front")

@section("title", "Accueil")

@section('content')
    {{-- Carousel --}}
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://nosagenceurs.com/wp-content/uploads/2023/07/amenagement-bureau-3d.png"
                    class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://nosagenceurs.com/wp-content/uploads/2023/07/espace-detente-coworking.png"
                    class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://nosagenceurs.com/wp-content/uploads/2023/07/amenagement-espace-coworking.png"
                    class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container py-4">
        {{-- Section Services --}}
        <div class="container-fluid pt-4">
            <h2 class="mb-4">Nos services</h2>
            <div class="d-flex flex-wrap" style="gap: 2rem;">
                <div class="card shadow-sm" style="flex: 1;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Conseil personnalisé</h5>
                        <p class="card-text">Nous vous accompagnons pour choisir les meilleurs produits adaptés à vos
                            besoins.
                        </p>
                    </div>
                </div>
                <div class="card shadow-sm" style="flex: 1;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Livraison rapide</h5>
                        <p class="card-text">Vos commandes sont préparées et livrées en un temps record pour votre confort.
                        </p>
                    </div>
                </div>
                <div class="card shadow-sm" style="flex: 1;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Support client 24/7</h5>
                        <p class="card-text">Une équipe disponible à tout moment pour répondre à toutes vos questions et
                            besoins.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section Produits (3 premiers) --}}
        <div class="container-fluid pt-4">
            <h2 class="mb-4">Nos produits</h2>
            <div class="row">
                @foreach($produits->take(3) as $produit)
                    <div class="col-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ $produit->img }}" class="card-img-top" alt="{{ $produit->nom }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $produit->nom }}</h5>
                                <p class="card-text">{{ $produit->descriptif }}</p>
                            </div>
                            <div class="card-footer">
                                <span class="fw-bold">{{ number_format($produit->prix, 2, ',', ' ') }} €</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 text-center">
                <a href="{{ route('product_front') }}" class="btn btn-primary">Voir plus</a>
            </div>
        </div>

        {{-- Section Équipe (3 premiers) --}}
        <div class="container-fluid pt-4">
            <h2 class="mb-4">Notre équipe</h2>
            <div class="row">
                @foreach($employes->take(3) as $employe)
                    <div class="col-4">
                        <div class="card h-100 shadow-sm p-4">
                            <img src="{{ $employe->img }}" class="card-img-top" alt="{{ $employe->prenom }}">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title">{{ $employe->prenom }} {{ $employe->nom }}</h5>
                                <p class="card-text">{{ $employe->poste }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 text-center">
                <a href="{{ route('team_front') }}" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>
@endsection