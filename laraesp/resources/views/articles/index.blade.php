@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
	<section class="content mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>
					<i class="fa fa-file"></i>
					Lista de Artículos
				</h1>
				<hr>
				<a class="btn btn-success" href="{{ url('articles/create') }}">
					<i class="fa fa-plus"></i> 
					Adicionar Artículo
				</a>
			<a class="btn btn-primary" href="{{ url('articlespdf') }}">
						<i class="fa fa-file-pdf-o"></i> 
					Descargar Articulos
				</a>
				<hr>
				@if (session('message'))
					<div class="alert alert-success alert-dismissible fade show">
					  {{ session('message') }}
					  <button type="button" class="close" data-dismiss="alert">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				@endif
				<table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Nombre</th>
							<th>Categoria</th>
							<th>Imagen</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($arts as $art)
							<tr>
								<td>{{ $art->name }}</td>
								<td>{{ $art->category->name }}</td>
								<td>
									<img class="img-thumbnail" src="{{ asset($art->image) }}" width="40px">
								</td>
								<td>
									<a class="btn btn-light" href="{{ url('articles/'.$art->id) }}">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-light" href="{{ url('articles/'.$art->id.'/edit') }}">
										<i class="fa fa-pencil"></i>
									</a>
									<form action="{{ url('articles/'.$art->id) }}" method="post" style="display: inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-danger btn-destroy">
											<i class="fa fa-trash"></i> 
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
@endsection

