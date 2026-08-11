<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    # FUNCION PARA TRAER TODOS LOS PRODUCTOS DE LA BASE DE DATOS
    public function index(){

        $productos = Producto::all();
        return response()->json($productos);
    }

    # FUNCION PARA CREAR UN PRODUCTO
    public function store(StoreProductoRequest $request){

        # VALIDAMOS LOS DATOS ENVIADOS MEDIANTE POSTMAN
        $datosValidados = $request->validated();

        # UNA VEZ VALIDADO CREAMOS EL USUARIO
        $producto = Producto::create($datosValidados);

        # DEVOLVEMOS EL PRODUCTO CREADO
        return response()->json($producto);
    }

    # FUNCION PARA ACTUALIZAR UN PRODUCTO
    public function update(UpdateProductoRequest $request, $id){

        # VALIDAMOS QUE EL ID EXISTA EN NUESTRA BASE DE DATOS (EN CASO QUE NO EXISTA MANDA UN 404)
        $producto = Producto::findOrFail($id);

        # VALIDAMOS LOS DATOS PARA ACTUALIZAR EL PRODUCTO
        $datosValidados = $request->validated();

        # ACTUALIZAMOS EL PRODUCTO
        $producto->update($datosValidados);

        # RETORNAMOS EL PRODUCTO ACTUALIZADO
        return response()->json($producto);
    }

    # FUNCION PARA ELIMINAR UN PRODUCTO
    public function destroy(Request $request, $id){

        #VALIDAMOS QUE ESE PRODUCTO EXISTA EN LA BASE DE DATOS
        $producto = Producto::findOrFail($id);

        #ELIMINAMOS EL PRODUCTO DE LA DB
        $producto->delete();

        #MOSTRAMOS UN MENSAJE EN PANTALLA EN FORMATO JSON
        return response()->json([
            'message' => 'Producto eliminado exitosamente.'
        ], 200);
    }
}