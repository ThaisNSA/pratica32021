<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FlorRequest;
use App\Models\Flor;

class FlorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lista de Flores';
        $flores = Flor::All();
        return view('admin.flores.index', compact('subtitulo', 'flores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('admin.flores.store');
        return view('admin.flores.form', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlorRequest $request)
    {
        Flor::create($request->all());
        $request->session()->flash('sucesso', "Dados incluidos com sucesso!");
        return redirect()->route('admin.flores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    //{
    //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flor = Flor::find($id);
        $action = route('admin.flores.update', $flor->id);
        return view('admin.flores.form', compact('flor', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlorRequest $request, $id)
    {
        $flor = Flor::find($id);
        $flor->update($request->all());

        $request->session()->flash('sucesso', "Dados alterados com sucesso!");
        return redirect()->route('admin.flores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Flor::destroy($id);
        $request->session()->flash('sucesso', "Dados exclu??dos com sucesso!");
        return redirect()->route('admin.flores.index');
    }
}
