<?php

namespace App\Http\Controllers;

use App\Models\Palpado;
use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PalpadoController extends Controller
{

    public function index(){

        $data = Palpado::all();

        return view('palpado.index', compact('data'));
    }

    public function show($id){

        $data = Palpado::find($id);
        return view('palpado.show', compact('data'));
    }

    public function create(){

        $reproductores = Palpado::all();
        $madres =  Animales::where('sexo' , 'F')->get();
        return view('palpado.create', compact('reproductores' , 'madres'));
    }

    public function store(Request $request){

        $new = new Palpado;
        $new->id_hembra =  $request->id_hembra;
        $new->fecha =  $request->fecha;
        $new->metodo =  $request->metodo;
        $new->estado =  $request->estado;
        $new->id_responsable =  Auth::user()->id;
        $new->diagnostico =  $request->diagnostico;

        $new->save();

        Session::flash('message', 'Registro creado con exito');

        return redirect()->action([PalpadoController::class, 'index']);
    }

    public function edit($id){

        $data = Palpado::find($id);
        $hembras =  Animales::where('sexo' , 'F')->get();
        return view('palpado.edit', compact('data', 'hembras'));
    }

    public function update(Request $request , $id){

        $data = Palpado::find($id);
        $data->id_hembra =  $request->id_hembra;
        $data->fecha =  $request->fecha;
        $data->metodo =  $request->metodo;
        $data->estado =  $request->estado;
        $data->id_responsable =  Auth::user()->id;
        $data->diagnostico =  $request->diagnostico;

        $data->save();

        Session::flash('message', 'Registro actualizado');

        return redirect()->action([PalpadoController::class, 'index']);
    }

    public function delete(Request $request){

        $data = Palpado::find($request->id);
        $data->delete();

        Session::flash('message', 'Registro Eliminado');

        return redirect()->action([PalpadoController::class, 'index']);
    }
}
