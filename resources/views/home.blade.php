@extends('layouts.app')

@section('content')
    <h1><strong>Por favor realiza alguna de las siguientes acciones:</strong></h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Login</strong></h5>
                    <p class="card-text">Inicia Sesión en el sitio.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Registrate</strong></h5>
                    <p class="card-text">Registrate y forma parte de la comidad IUD.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
@endsection
