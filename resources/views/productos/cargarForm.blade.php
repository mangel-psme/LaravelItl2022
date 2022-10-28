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

    <form method="post" action="{{ url('editarP') }}">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $producto->id }}">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
                   value="{{ $producto->nombre }}">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio del producto</label>
            <input type="number" class="form-control" id="precio" name="precio"
                    value="{{ $producto->precio }}">
        </div>
        <div class="mb-3">
            <label for="inventario" class="form-label">Cantidad de productos</label>
            <input type="text" class="form-control" id="inventario" name="inventario"
                    value="{{ $producto->inventario }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
