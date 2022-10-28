<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function lista() {
        // Obtener los registros de la tabla productos
        $productos = Productos::all(); // select * from productos

        // Empaquetar los datos
        $data = [
            'productos' => $productos
        ];

        return view('productos.lista', $data);
    }

    public function formulario() {
        return view('productos.formulario');
    }

    public function registrar(Request $datosForm) {
        // echo $datosForm->nombre;
        // echo '<br>';
        // echo $datosForm->precio;
        // echo '<br>';
        // echo $datosForm->inventario;

        // Creamos objeto del modelo
        $productosObj = new Productos();

        // Asignar los valores a las columnas
        $productosObj->nombre = $datosForm->nombre;
        $productosObj->precio = $datosForm->precio;
        $productosObj->inventario = $datosForm->inventario;

        // Guardar el registro
        $productosObj->save();

        return redirect()->to('listaP');
    }

    public function cargar($id) {
        // echo $id;
        // Buscar el registro
        $producto = Productos::find($id);
        // select * from productos where id = $id

        // Empaquetar
        $data = [
            'producto' => $producto
        ];

        return view('productos.cargarForm', $data);
    }

    public function editar(Request $datosForm) {
        // Buscar el producto
        $producto = Productos::find($datosForm->id);

        // Editar los valores de las columnas
        $producto->nombre = $datosForm->nombre;
        $producto->precio = $datosForm->precio;
        $producto->inventario = $datosForm->inventario;

        // Guardamos el objeto
        $producto->save();

        // Regresamos a la vista principal
        return redirect()->to('listaP');
    }

    public function eliminar($id) {
        // Búsqueda del producto
        $producto = Productos::find($id);

        // Eliminar el registro
        $producto->delete();

        // Redirigimos a lista principal
        return redirect()->to('listaP');
    }
}
