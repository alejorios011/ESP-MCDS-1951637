@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-plus"></i> 
					Crear Categoría
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('categories') }}">Lista de Categorías</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Crear Categoría
			    </li>
			  </ol>
			  @if (count($errors) > 0)
			  	  <div class="alert alert-danger alert-dismissible fade show">
				  @foreach ($errors->all() as $message)
				  		<li>{{ $message }}</li>
				  @endforeach
				  	<button type="button" class="close" data-dismiss="alert">
					   	<span aria-hidden="true">&times;</span>
					</button>
				</div>
			  @endif
				<form action="{{ url('categories') }}" method="post">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Nombre de Usuario" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<textarea name="description" class="form-control @if($errors->has('description')) is-invalid @endif" cols="30" rows="4" placeholder="Descripción">{{ old('description') }}</textarea>
					</div>

					<div class="form-group">
						<button class="btn btn-success btn-lg"> 
							<i class="fa fa-save"></i>
							Guardar
						</button>
						<button class="btn btn-light btn-lg" type="reset"> 
							<i class="fa fa-trash"></i>
							Limpiar
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection