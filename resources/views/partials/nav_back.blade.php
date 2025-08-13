<nav class="navbar navbar-expand-lg bg-body-secondary" style="height: 60px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route("home") }}">My Little Company</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('employee_back') ? 'active' : '' }}" href="
                                {{ route("employee_back") }}">Voir les employées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product_back') ? 'active' : '' }}" href="
                                {{ route("product_back") }}">Voir les produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('message_back') ? 'active' : '' }}" href="
                                {{ route("contact_back") }}">Voir les messages</a>
                </li>
                 <a href="{{ route('home') }}"
                    class="btn btn-secondary btn-sm position-absolute end-0 me-4"
                    style="opacity:0.5; font-size:0.75rem;">
                    Aller au front
                </a>
            </ul>
        </div>
    </div>
</nav>