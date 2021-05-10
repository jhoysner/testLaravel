<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reproductores;
use Illuminate\Support\Facades\Session;

class ReproductoresController extends Controller
{
    public function index(){

        $reproductores = Reproductores::all();

        return view('reproductores.welcome', compact('reproductores'));
    }

    public function show($id){

        $data = Reproductores::find($id);

        return view('reproductores.show', compact('data'));
    }

    public function create(){

        return view('reproductores.create');
    }

    public function store(Request $request){

        $new = new Reproductores;
        $new->nombre = $request->nombre;
        $new->padre = $request->padre;
        $new->madre = $request->madre;
        $new->madre_padre = $request->madre_padre;
        $new->madre_madre = $request->madre_madre;
        $new->padre_madre = $request->padre_madre;
        $new->padre_padre = $request->padre_padre;
        $new->tipo = $request->tipo;
        $new->raza = $request->raza;
        $new->save();

        Session::flash('message', 'Registro creado con exito');

        return redirect()->action([ReproductoresController::class, 'index']);
    }

    public function edit($id){

        $data = Reproductores::find($id);

        return view('reproductores.edit', compact('data'));
    }

    public function update(Request $request , $id){

        $data = Reproductores::find($id);
        $data->nombre = $request->nombre;
        $data->padre = $request->padre;
        $data->madre = $request->madre;
        $data->madre_padre = $request->madre_padre;
        $data->madre_madre = $request->madre_madre;
        $data->padre_madre = $request->padre_madre;
        $data->padre_padre = $request->padre_padre;
        $data->tipo = $request->tipo;
        $data->raza = $request->raza;
        $data->save();

        Session::flash('message', 'Registro actualizado');

        return redirect()->action([ReproductoresController::class, 'index']);
    }

    public function delete(Request $request){

        $data = Reproductores::find($request->id);
        $data->delete();

        Session::flash('message', 'Registro Eliminado');

        return redirect()->action([ReproductoresController::class, 'index']);
    }
}
