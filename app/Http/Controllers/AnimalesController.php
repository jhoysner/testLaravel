<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use Illuminate\Http\Request;
use App\Models\Reproductores;
use Illuminate\Support\Facades\Session;

class AnimalesController extends Controller
{
    public function index(){

        $data = Animales::all();

        return view('animales.index', compact('data'));
    }

    public function show($id){

        $data = Animales::find($id);

        return view('animales.show', compact('data'));
    }

    public function create(){

        $reproductores = Reproductores::all();
        return view('animales.create', compact('reproductores'));
    }

    public function store(Request $request){


        $last_id = Animales::latest()->first()->id;
        $new = new Animales;
        $new->numero =  $last_id + 1;
        $new->especie =  $request->especie;
        $new->nombre =  $request->nombre;
        $new->sexo =  $request->sexo;
        $new->id_padre = $request->id_padre;
        $new->id_madre = $request->id_madre;
        $new->fecha_nacimiento = $request->fecha_nacimiento;
        $new->peso_nacimiento = $request->peso_nacimiento;
        $new->fecha_compra  =  $request->fecha_compra;
        $new->fecha_salida   =  $request->fecha_salida;
        $new->tipo_salida  =  $request->tipo_salida;
        $new->comentario_salida  =  $request->comentario_salida;
        $new->raza =  $request->raza;
        $new->hato =  $request->hato;
        $new->marca =  $request->marca;
        $new->capa =  $request->capa;
        $new->tipo_animal  =  $request->tipo_animal;
        $new->save();

        Session::flash('message', 'Registro creado con exito');

        return redirect()->action([AnimalesController::class, 'index']);
    }

    public function edit($id){

        $data = Animales::find($id);

        return view('animales.edit', compact('data'));
    }

    public function update(Request $request , $id){

        // dd($request->all());
        $data = Animales::find($id);
        $data->especie =  $request->especie;
        $data->nombre =  $request->nombre;
        $data->sexo =  $request->sexo;
        $data->id_padre = $request->id_padre;
        $data->id_madre = $request->id_madre;
        $data->fecha_nacimiento = $request->fecha_nacimiento;
        $data->peso_nacimiento = $request->peso_nacimiento;
        // $data->fecha_destete = $request->fecha_destete;
        // $data->peso_destete =  $request->peso_destete;
        $data->fecha_compra  =  $request->fecha_compra;
        $data->fecha_salida   =  $request->fecha_salida;
        $data->tipo_salida  =  $request->tipo_salida;
        $data->comentario_salida  =  $request->comentario_salida;
        $data->raza =  $request->raza;
        $data->hato =  $request->hato;
        $data->marca =  $request->marca;
        $data->capa =  $request->capa;
        $data->tipo_animal  =  $request->tipo_animal;
        $data->save();

        Session::flash('message', 'Registro actualizado');

        return redirect()->action([AnimalesController::class, 'index']);
    }

    public function delete(Request $request){

        $data = Animales::find($request->id);
        $data->delete();

        Session::flash('message', 'Registro Eliminado');

        return redirect()->action([AnimalesController::class, 'index']);
    }
}
