@extends('layouts.app')

@section('title', 'Consultar Categoria')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-search"></i> 
					Consultar Categoría
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('categories') }}">Lista de Categorías</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Consultar Categoría
			    </li>
			  </ol>
			  <table class="table table-striped table-bordered table-hover">
			  	<tr>
			  		<th>Id:</th>
			  		<td>{{ $cat->id }}</td>
			  	</tr>
			  	<tr>
			  		<th>Nombre:</th>
			  		<td>{{ $cat->name }}</td>
			  	</tr>
			  	<tr>
			  		<th>Descripción:</th>
			  		<td>{{ $cat->description }}</td>
			  	</tr>
			  	<tr>
			  		<th>Fecha Creación:</th>
			  		<td>{{ $cat->created_at }}</td>
			  	</tr>
				<tr>
			  		<th>Fecha Actualización:</th>
			  		<td>{{ $cat->updated_at }}</td>
			  	</tr>
			  </table>
		</div>
	</div>
</section>
@endsection
