<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FlorRequest;

use App\Models\Flor;

class FlorController extends Controller
{
    public function flores()
    {

        $subtitulo = 'Lista de Flores';

        $flores = Flor::all();

        return view('admin.flores.index', compact('subtitulo', 'flores'));
    }

    public function formAdicionar()
    {
        $action = route('admin.flores.adicionar');

        return view('admin.flores.form', compact('action'));
    }
    public function adicionar(FlorRequest $request)
    {

        Flor::create($request->all());

        $request->session()->flash('sucesso', "Dados incluidos com sucesso!");

        return redirect()->route('admin.flores.listar');
    }

    public function deletar($id, Request $request)
    {
        Flor::destroy($id);
        $request->session()->flash('sucesso', "Dados excluídos com sucesso!");
        return redirect()->route('admin.flores.listar');
    }
    public function formEditar($id)
    {
        $flor = Flor::find($id);
        $action = route('admin.flores.editar', $flor->id);
        return view('admin.flores.form', compact('flor', 'action'));
    }

    public function editar(FlorRequest $request, $id)
    {
        $flor = Flor::find($id);
        $flor->nome = $request->nome;
        $flor->cor = $request->cor;
        $flor->preco = $request->preco;
        $flor->save();

        $request->session()->flash('sucesso', "Dados editados com sucesso!");
        return redirect()->route("admin.flores.listar");
    }
}
