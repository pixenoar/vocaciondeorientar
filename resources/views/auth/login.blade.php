@extends('layouts.site')

@section('title')
    Login - 
@endsection

@section('contenido')

    <div class="container-fluid bg-dark">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-lg-3">
                <div class="mb-4">
                    <a href="{{ route('site.home') }}" class="bg-info">
                        <img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid d-block mx-auto">
                    </a>
                </div>
                <div class="card border-0 shadow p-lg-3">
                    <div class="card-body">
                        <h1 class="h3 text-center fw-light mb-4">Iniciar Sesión</h1>
                        <form method="POST" action="{{ route('login') }}" class="m-0" novalidate>
                        @csrf
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}">
                                        <label for="email">Correo Electrónico</label>
                                        @error('email')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña">
                                        <label for="password">Contraseña</label>
                                        @error('password')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Recordarme</label>
                                    </div>
                                </div>
                                <div class="col-8 text-end">
                                    <a href="javascript:void()" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">INGRESAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
