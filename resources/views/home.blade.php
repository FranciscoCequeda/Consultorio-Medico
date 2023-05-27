@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Modulo Publicaciones</h5>
                          <p class="card-text">Crear Publicaciones</p>
                          <a href="#" class="btn btn-primary">Ir a Publicaciones</a>
                        </div>
                      </div>
                      
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Modulo Categorias</h5>
                          <p class="card-text">Crear Categorias</p>
                          <a href="#" class="btn btn-primary">Ir a Categorias</a>
                        </div>
                      </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
