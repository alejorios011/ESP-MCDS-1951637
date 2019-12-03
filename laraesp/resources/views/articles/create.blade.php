@extends('layouts.app')

@section('title', 'Crear Artículo')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-plus"></i> 
					Crear Artículo
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('articles') }}">Lista de Artículos</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Crear Artículo
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
				<form action="{{ url('articles') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Nombre Artículo" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<input type="file" name="image" class="form-control-file @if($errors->has('image')) is-invalid @endif" accept="image/*">
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
						<textarea name="content" class="form-control @if($errors->has('content')) is-invalid @endif" cols="30" rows="4" placeholder="Contenido">{{ old('content') }}</textarea>
					</div>
					<div class="form-group">
						<select name="category_id" class="form-control @if($errors->has('category_id')) is-invalid @endif">
							<option value="">Seleccione Categoria...</option>
							@foreach ($cats as $cat)
								<option value="{{ $cat->id }}" @if($cat->id == old('category_id')) selected @endif>{{ $cat->name }}</option>
							@endforeach
						</select>
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