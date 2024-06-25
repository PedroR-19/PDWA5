<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class CadastrarController extends Controller
{
    //regra de negócio: validar e persistir dados
    public function salvar (Request $request){

        $request->validate([
            //campos titulos_copa_mundo e tamanho não são requeridos
            "idioma" => "required|string",
            "idh" => "required|numeric|between:0,1",
            "populacao" => "required|integer|min:0",
            "titulos_copa_mundo" => "required|integer|min:0",
            "tamanho" => "required|numeric",
        ]
        ,[
            "idioma.required" => "O campo 'Idioma' deve ser preenchido",
            "idioma.string" => "O campo 'Idioma' deve ser válido",
            "idh.required" => "O campo 'IDH' deve ser preenchido",
            "idh.numeric" => "O IDH deve ser válido",
            "idh.between" => "O IDH deve ser válido",
            "populacao.required" => "O campo 'populacao' deve ser preenchido",
            "populacao.integer" => "A população deve ser um número inteiro",
            "populacao.min" => "A população não pode ser negativa",
            "titulos_copa_mundo.required" => "O campo 'Títulos de Copa do Mundo' deve ser preenchido",
            "titulos_copa_mundo.integer" => "O campo 'Títulos de Copa do Mundo' deve ser preenchido com um número inteiro",
            "titulos_copa_mundo.min" => "O campo 'Títulos de Copa do Mundo' não deve ser negativo",
            "tamanho.required" => "O campo 'Extensão Territorial' deve ser preenchido",
            "tamanho.numeric" => "O campo 'Extensão Territorial' deve ter um valor numérico"
        ]    
    
        );

        $paisNovo = new Pais();
        $paisNovo->fill($request->all());
        $paisNovo->save();
        
        // dd($request);

        return view('cadastroSalvo');

    }

}
