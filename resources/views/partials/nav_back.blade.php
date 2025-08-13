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
                    <a class="nav-link {{ request()->routeIs("home") ? 'active' : '' }}"
                        href="{{ route("home") }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product_front') ? 'active' : '' }}"
                        href="{{ route("product_front") }}">Nos produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('team_front') ? 'active' : '' }}"
                        href="{{ route("team_front") }}">Notre équipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact_front') ? 'active' : '' }}"
                        href="{{ route("contact_front") }}">Contactez-nous</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('*_back') ? 'active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Back Office
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->routeIs('employee_back') ? 'active' : '' }}" href="
                                {{ route("employee_back") }}">Voir les employées</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('product_back') ? 'active' : '' }}" href="
                                {{ route("product_back") }}">Voir les produits</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('message_back') ? 'active' : '' }}" href="
                                {{ route("message_back") }}">Voir les messages</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>