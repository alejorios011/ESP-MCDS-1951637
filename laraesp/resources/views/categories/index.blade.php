@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('content')
	<section class="content mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>
					<i class="fa fa-list"></i>
					Lista de Categorías
				</h1>
				<hr>
				<a class="btn btn-success" href="{{ url('categories/create') }}">
					<i class="fa fa-plus"></i> 
					Adicionar Categoría
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
							<th>Id</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cats as $cat)
							<tr>
								<td>{{ $cat->id }}</td>
								<td>{{ $cat->name }}</td>
								<td>{{ $cat->description }}</td>
								<td>
									<a class="btn btn-light" href="{{ url('categories/'.$cat->id) }}">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-light" href="{{ url('categories/'.$cat->id.'/edit') }}">
										<i class="fa fa-pencil"></i>
									</a>
									<form action="{{ url('categories/'.$cat->id) }}" method="post" style="display: inline-block;">
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

