<?php

namespace App\Http\Controllers;

use App\Models\Celo;
use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CelosController extends Controller
{
    public function index(){

        $data = Celo::all();

        return view('celos.index', compact('data'));
    }

    public function show($id){

        $data = Celo::find($id);


        return view('celos.show', compact('data'));
    }

    public function create(){

        $reproductores = Celo::all();
        $madres =  Animales::where('sexo' , 'F')->get();
        return view('celos.create', compact('reproductores' , 'madres'));
    }

    public function store(Request $request){

        $new = new Celo;
        $new->id_hembra =  $request->id_hembra;
        $new->fecha =  $request->fecha;
        $new->hora =  $request->hora;
        $new->tipo =  $request->tipo;
        $new->id_responsable =  Auth::user()->id;
        $new->comentarios =  $request->comentario;

        $new->save();

        Session::flash('message', 'Registro creado con exito');

        return redirect()->action([CelosController::class, 'index']);
    }

    public function edit($id){

        $data = Celo::find($id);
        $hembras =  Animales::where('sexo' , 'F')->get();
        return view('celos.edit', compact('data', 'hembras'));
    }

    public function update(Request $request , $id){

        $data = celo::find($id);
        $data->id_hembra =  $request->id_hembra;
        $data->fecha =  $request->fecha;
        $data->hora =  $request->hora;
        $data->tipo =  $request->tipo;
        $data->id_responsable =  Auth::user()->id;
        $data->comentarios =  $request->comentario;

        $data->save();

        Session::flash('message', 'Registro actualizado');

        return redirect()->action([CelosController::class, 'index']);
    }

    public function delete(Request $request){

        $data = Celo::find($request->id);
        $data->delete();

        Session::flash('message', 'Registro Eliminado');

        return redirect()->action([CelosController::class, 'index']);
    }
}
