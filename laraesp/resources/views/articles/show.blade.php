@extends('layouts.app')

@section('title', 'Consultar Artículo')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-search"></i> 
					Consultar Artículo
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('articles') }}">Lista de Artículos</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Consultar Artículo
			    </li>
			  </ol>
			  <table class="table table-striped table-bordered table-hover">
			  	<tr>
			  		<th>Nombre:</th>
			  		<td>{{ $art->name }}</td>
			  	</tr>
			  	<tr>
			  		<th class="align-middle">Imagen:</th>
			  		<td class="text-center">
			  			<img class="img-thumbnail" src="{{ asset($art->image) }}" width="200px">
			  		</td>
			  	</tr>
			  	<tr>
			  		<th>Contenido:</th>
			  		<td>{{ $art->content }}</td>
			  	</tr>
			  	<tr>
			  		<th>Editor:</th>
			  		<td>{{ $art->user->fullname }}</td>
			  	</tr>
			  	<tr>
			  		<th>Categoria:</th>
			  		<td>{{ $art->category->name }}</td>
			  	</tr>
			  </table>
		</div>
	</div>
</section>
@endsection
