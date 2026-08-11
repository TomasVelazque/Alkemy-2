<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_producto' => 'required|string|max:255',
            'descripcion_producto' => 'nullable|string',
            'precio_producto' => 'required|numeric',
            'stock_producto' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id'
        ];
    }
}