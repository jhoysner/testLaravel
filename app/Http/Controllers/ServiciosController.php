<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Models\Reproductores;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Servicio::all();

        return view('servicios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reproductores = Reproductores::all();
        $madres =  Animales::where('sexo' , 'F')->get();
        return view('servicios.create', compact('reproductores' , 'madres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = new Servicio;

        $data->id_animal = $request->id_animal;
        $data->id_reproductor = $request->id_reproductor;
        $data->hora_inseminacion = $request->hora_inseminacion;
        $data->tipo_reproduccion = $request->tipo_reproduccion;
        $data->inseminador = $request->inseminador;
        $data->responsable = $request->responsable;
      
        $data->save();

        Session::flash('message', 'Registro creado');

        return redirect()->action([ServiciosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Servicio::findOrFail($id);
        return view('servicios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reproductores = Reproductores::all();
        $madres =  Animales::where('sexo' , 'F')->get();
        $data = Servicio::findOrFail($id);

        dump($data->hora_inseminacion);
        return view('servicios.edit', compact('reproductores' , 'madres','data'));
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
        $data = Servicio::findOrFail($id);
        $data->id_animal = $request->id_animal;
        $data->id_reproductor = $request->id_reproductor;
        $data->hora_inseminacion = $request->hora_inseminacion;
        $data->tipo_reproduccion = $request->tipo_reproduccion;
        $data->inseminador = $request->inseminador;
        $data->responsable = $request->responsable;
      
        $data->save();

        Session::flash('message', 'Registro actualizado');

        return redirect()->action([ServiciosController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){

        $data = Servicio::find($request->id);
        $data->delete();

        Session::flash('message', 'Registro Eliminado');

        return redirect()->action([ServiciosController::class, 'index']);
    }
}
