<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Doctrine\Inflector\Rules\Substitution;
use Illuminate\Http\Request;

use App\Models\Flor;

class FlorController extends Controller
{
    public function flores()
    {

        $subtitulo = 'Listas de Flores';

        $flores = Flor::all();

        //dd($flores);

        //foreach ($flores as $flor) {echo $flor->nome;}
        return view('admin.flores.index', compact('subtitulo', 'flores'));
    }
}
