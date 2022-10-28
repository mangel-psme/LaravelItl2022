<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">


<h1>Lista de productos</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Inventario</th>
        <th scope="col">Operaciones</th>
    </tr>
    </thead>
    <tbody>

    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->inventario }}</td>
            <td>
                <a href="{{ url('cargarP/' . $producto->id) }}">
                    Editar
                </a>
                <a href="{{ url('eliminarP/' . $producto->id) }}">
                    Eliminar
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
