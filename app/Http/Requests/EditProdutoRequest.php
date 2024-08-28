<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'nome_produto' => 'required|max:160',
            'codigo_produto' => 'required|min:1|max:7',
            'descricao_produto' => 'max:255',
            'preco_produto' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'nome_produto.required' => 'O nome do produto náo pode estar em branco',
            'nome_produto.max' => 'O nome do produto deve ter no máximo 160 caracteres',
            'codigo_produto.required' => 'O código do prduto não pode estar em branco',
            'codigo_produto.min' => 'Código do produto precisa ter no mínimo dois caracteres',
            'descricao_produto.max' => 'A descrição do produto deve ter no máximo 255 caracteres',
            'preco_produto.required' => 'O campo de preço não pode estar em branco',
        ];
    }
}
