
    <div class="container-fluid d-flex justify-content-between align-items-center bg-white shadow-sm px-4 px-lg-5 py-3">
        <div>
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/svg/logo-dash.svg') }}" alt="Logo" class="img-fluid">
            </a>
        </div>
        <div class="d-none d-lg-block">
            <ul class="nav nav-pills small">
                <li class="nav-item">
                    <a href="" class="nav-link @if(request()->routeIs('dash')) active @endif"><i class="bi bi-journal-text me-1"></i> Artículos</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link @if(request()->routeIs('empresas.*')) active @endif"><i class="bi bi-list-ul me-1"></i> Categorías</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav">

                <li class="nav-item dropdown d-lg-none">
                    <a href="#" class="nav-link" id="admin" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-10,5"><i class="bi bi-three-dots-vertical fs-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="admin">
                        <li><a href="" class="dropdown-item small @if(request()->routeIs('dashboard')) active @endif"><i class="bi bi-speedometer2 me-1"></i> Dashboard</a></li>
                        <li><a href="" class="dropdown-item small @if(request()->routeIs('empresas.*')) active @endif"><i class="bi bi-building me-1"></i> Empresas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="acount" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-10,5"><i class="bi bi-person-circle fs-5"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="acount">
                        <li><h6 class="dropdown-header fw-bold">{{ Auth::user()->name.' '.Auth::user()->surname }}</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="javascript:void(0)" class="dropdown-item small" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>