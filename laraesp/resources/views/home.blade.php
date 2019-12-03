@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ESCRITORIO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="jumbotron text-center">
                        <img class="img-thumbnail" src="{{ asset(Auth::user()->photo) }}" width="120px">
                        <h2> {{ Auth::user()->fullname }}</h2>
                        <h4>
                            @if (Auth::user()->role == "Admin")
                                Administrador
                            @elseif(Auth::user()->role == "Editor")
                                Editor
                            @endif
                        </h4>
                    </div>
                    <div class="btn-group-vertical btn-group-lg d-block">
                        <a href="{{ url('users') }}" class="btn btn-outline-dark"> 
                            <i class="fa fa-users"></i>
                            Módulo de Usuarios
                        </a>
                        <a href="{{ url('categories') }}" class="btn btn-outline-dark">
                            <i class="fa fa-list"></i>
                            Módulo de Categorías
                        </a>
                        <a href="{{ url('articles') }}" class="btn btn-outline-dark"> 
                            <i class="fa fa-file"></i>
                            Módulo de Artículos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
