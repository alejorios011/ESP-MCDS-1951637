@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-pencil"></i> 
					Editar Usuario
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('users') }}">Lista de Usuarios</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Editar Usuario
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
				<form action="{{ url('users/'.$user->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $user->id }}">
					<div class="form-group">
						<input type="text" class="form-control @if($errors->has('username')) is-invalid @endif" name="username" placeholder="Nombre de Usuario" value="{{ $user->username }}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control @if($errors->has('fullname')) is-invalid @endif" name="fullname" placeholder="Nombre y Apellidos" value="{{ $user->fullname }}">
					</div>
					<div class="form-group">
						<input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" placeholder="Correo Electrónico" value="{{ $user->email }}">
					</div>
					<div class="form-group">
						<input type="date" class="form-control @if($errors->has('birthdate')) is-invalid @endif" name="birthdate" placeholder="Fecha Nacimiento" value="{{ $user->birthdate }}">
					</div>
					<div class="form-group">
						<select name="gender" class="form-control @if($errors->has('gender')) is-invalid @endif">
							<option value="">Seleccione Genero...</option>
							<option value="Female" @if($user->gender == 'Female') selected @endif>Femenino</option>
							<option value="Male" @if($user->gender == 'Male') selected @endif>Masculino</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="photo" class="form-control-file @if($errors->has('photo')) is-invalid @endif" accept="image/*">
					</div>
					 {{-- <input type="file" name="img[]" class="file" accept="image/*">
				     <div class="input-group my-3">
				      <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
				      <div class="input-group-append">
				        <button type="button" class="browse btn btn-primary">Browse...</button>
				      </div>
				    </div> 
				    <div class="ml-2 col-sm-6">
					  <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
					</div> --}}
					<div class="form-group">
						<button class="btn btn-success btn-lg"> 
							<i class="fa fa-save"></i>
							Editar
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