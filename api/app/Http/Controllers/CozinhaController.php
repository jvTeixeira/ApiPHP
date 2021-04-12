<?php


namespace App\Http\Controllers;


use App\Models\Cozinha\Cozinha;
use http\Env\Request;

class CozinhaController extends Controller
{

    /**
     * CozinhaController constructor.
     */
    public function __construct()
    {
    }

    public function obterTodos()
    {
        $cozinhas = Cozinha::all();
        return response()->json($cozinhas);
    }

    public function criar(Request $request)
    {
        Cozinha::create($request->all());
        return response()->json("Cadastro concluído");
    }

    public function consultar($id)
    {
        Cozinha::find();
        return response()->json($id);
    }

    public function alterar(Request $request, $id)
    {
        $cozinha = Cozinha::find($id);
        $cozinha->update($request->all());
        return response()->json($cozinha);

    }

    public function deletar($id)
    {

        $cozinha = Cozinha:: delete($id);
        return response()->json($cozinha);
    }
}
