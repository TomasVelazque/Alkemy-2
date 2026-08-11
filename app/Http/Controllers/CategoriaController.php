<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    # FUNCION PARA DEVOLVER TODAS LAS CATEORIAS
    public function index(){

        # BUSCAMOS TODAS LAS CATEGORIAS QUE HAY EN LA DB
        $categorias = Categoria::all();

        # DEVOLVEMOS LAS CATEGORIAS EN FORMATO JSON
        return response()->json($categorias);
    }

    # FUNCION PARA CREAR UNA CATEGORIA
    public function store(StoreCategoriaRequest $request){

        # VALIDAMOS LOS DATOS ENVIADOS
        $datosValidados = $request->validated();

        # UNA VEZ VALIDADOS CREAMOS LA CATEGORIA
        $categoria = Categoria::create($datosValidados);

        # RETORNAMOS LA CATEGORIA CREADA
        return response()->json($categoria);
    }

    # FUNCION PARA ACTUALIZAR UNA CATEGORIA
    public function update(UpdateCategoriaRequest $request, $id){

        # VALIDAMOS QUE LA CATEGORIA EXISTA EN LA BASE DE DATOS
        $categoria = Categoria::findOrFail($id);

        # VALIDAMOS LOS CAMPOS DE LA CATEGIORIA
        $datosValidados = $request->validated();

        # ACTUALIZAMOS LOS DATOS DE LA CATEGORIA
        $categoria->update($datosValidados);

        # DEVOLVEMOS LA CATEGORIA ACTUALIZADA
        return response()->json($categoria);
    }

    # FUNCION PARA ELIMINAR UNA CATEGORIA
    public function destroy(Request $request, $id){

        # VALIDAMOS QUE LA CATEGORIA EXISTA EN LA BASE DE DATOS
        $categoria = Categoria::findOrFail($id);

        # SI SE ENCUENTRA ELIMINAMOS EL REGISTRO DE LA BASE DE DATOS
        $categoria->delete();

        # RETORNAMOS UN MENSAJE DE EXITO
        return response()->json([
            'message' => 'Categoria eliminada exitosamente.'
        ], 200);
    }
}
