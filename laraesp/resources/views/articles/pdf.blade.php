<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Articulos</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: sans-serif;
        }
        table thead {
            background-color: #000;
            color: #FFF;
            padding: 12px;
            text-align: center;
        }
        table th,
        table td {
            border: 1px solid #333;
            padding: 6px;
        }
        table tbody tr:nth-child(odd) {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Creación</th>
                <th>Actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arts as $art)
                <tr>
                    <td>{{ $art->name }}</td>
                    <td>{{ $art->category->name }}</td>
                    <td>{{ $art->content }}</td>
                    <td>{{ $art->created_at }}</td>
                    <td>{{ $art->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>