<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar el modelo
use App\Barber;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $barbers = Barber::all();


        return view('barbers.index', compact('barbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create/crear
       $barberObject = new Barber;
       $barberObject->descripcion_corte = $request->description_text;
       $barberObject->barbero = $request->barbero_text;
       $barberObject->fecha_turno = $request->fecha_date;
       $barberObject->responsable = $request->responsable_text;
       $barberObject->save();

       $barbers = Barber::all();
       return view('barbers.index', compact('barbers'));
   }

    /**
     * Display the specified resource.
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
        $objectToUpdate = Barber::find($id);
        return view('barbers.edit', compact('objectToUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //update/actualizar
         $objectToUpdate = Barber::find($request->id_responsable_hidden);
         $objectToUpdate->descripcion_corte = $request->description_text;
         $objectToUpdate->barbero = $request->barbero_text;
         $objectToUpdate->fecha_turno = $request->fecha_date;
         $objectToUpdate->responsable = $request->responsable_text;
         $objectToUpdate->save();
  
         $barbers = Barber::all();
         return view('barbers.index', compact('barbers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barbers)
    {
        //Delete/eliminar
        $objectToDelete = Barber::destroy($id_barbers);
        $barbers = Barber::all();
        
        return view('barbers.index', compact('barbers'));
    }
}