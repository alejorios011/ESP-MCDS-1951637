<h1>Lista de Artículos</h1>

<a href="{{ route('categorias') }}"> Lista de Categorias</a>

@foreach ($articles as $article)
	<ul>
		<li><strong> Título:</strong>    {{ $article->name }} </li>
		<li><strong> Contenido:</strong> {{ $article->content }} </li>
		<li><strong> Imagen:</strong>    {{ $article->image }} </li>
		<li>
			<strong> Editor:</strong>    
			<a href="{{ url('user/'.$article->user_id) }}">
				{{ $article->user->fullname }}
			</a>
		</li>
		<li><strong> Categoría:</strong> {{ $article->category->name }} </li>
	</ul>
@endforeach