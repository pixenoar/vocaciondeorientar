
    <div class="container-fluid d-flex justify-content-between align-items-center bg-white shadow-sm px-4 px-lg-5 py-3">
        <div>
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/svg/logo-dash.svg') }}" alt="Logo" class="img-fluid">
            </a>
        </div>
        <div class="d-none d-lg-block">
            <ul class="nav nav-pills small">
                <li class="nav-item">
                    <a href="{{ route('dash.articulos') }}" class="nav-link @if(request()->routeIs('dash.articulos')) active @endif"><i class="bi bi-journal-text me-1"></i> Artículos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dash.categorias') }}" class="nav-link @if(request()->routeIs('dash.categorias')) active @endif"><i class="bi bi-list-ul me-1"></i> Categorías</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav">

                <li class="nav-item dropdown d-lg-none">
                    <a href="#" class="nav-link" id="admin" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-10,-5"><i class="bi bi-three-dots fs-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="admin">
                        <li><a href="{{ route('dash.articulos') }}" class="dropdown-item small @if(request()->routeIs('dash.articulos')) active @endif"><i class="bi bi-journal-text me-1"></i> Artículos</a></li>
                        <li><a href="{{ route('dash.categorias') }}" class="dropdown-item small @if(request()->routeIs('dash.categorias')) active @endif"><i class="bi bi-list-ul me-1"></i> Categorías</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="acount" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-10,-5"><i class="bi bi-person-circle fs-5"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="acount">
                        <li><h6 class="dropdown-header fw-bold">{{ Auth::user()->name.' '.Auth::user()->surname }}</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="javascript:void(0)" class="dropdown-item small" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left me-1"></i> Cerrar Sesión</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>