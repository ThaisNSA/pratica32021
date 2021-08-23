<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flor;
use App\Models\Finalidade;
use App\Models\Tipo;
use App\Models\Quantidade;
use App\Models\Tamanho;
use Illuminate\Support\Facades\DB;

class QuantidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quantidades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flores = Flor::all();
        $tipos = Tipo::all();
        $finalidades = Finalidade::all();
        $tamanhos = Tamanho::all();
        $action = route('admin.quantidades.store');
        return view('admin.quantidades.form', compact('action', 'flores', 'tipos', 'finalidades', 'tamanhos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $quantidade = Quantidade::create($request->all());
        $quantidade->endereco()->create($request->all());

        if ($request->has('tamanhos')) {

            $quantidade->tamanhos()->attach($request->tamanhos);
        }

        DB::Commit();

        Flor::create($request->all());
        $request->session()->flash('sucesso', "Dados incluidos com sucesso!");
        return redirect()->route('admin.quantidade.index');
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
