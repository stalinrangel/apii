<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //cargar todas las coordenadas
        $coordenadas = \App\Zonas::all();

        if(count($coordenadas) == 0){
            return response()->json(['error'=>'No existen coordenadas.'], 404);          
        }else{
            return response()->json(['coordenadas'=>$coordenadas], 200);
        }
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
         // Primero comprobaremos si estamos recibiendo todos los campos.
        if ( !$request->input('nombre') )
        {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 422 Unprocessable Entity – [Entidad improcesable] Utilizada para errores de validación.
            return response()->json(['error'=>'Falta el parámetro nombre.'],422);
        } 

        if ( !$request->input('coordenadas') )
        {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 422 Unprocessable Entity – [Entidad improcesable] Utilizada para errores de validación.
            return response()->json(['error'=>'Falta el parámetro coordenadas.'],422);
        } 

        if ( !$request->input('costo') )
        {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 422 Unprocessable Entity – [Entidad improcesable] Utilizada para errores de validación.
           // return response()->json(['error'=>'Falta el parámetro costo.'],422);
        } 
        

        if($nuevaCiudad=\App\Zonas::create($request->all())){

           return response()->json(['message'=>'Ciudad creada con éxito.',
             'ciudad'=>$nuevaCiudad], 200);
        }else{
            return response()->json(['error'=>'Error al crear la ciudad.'], 500);
        }
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
        // Comprobamos si la ciudad que nos están pasando existe o no.
        $zonas=\App\Zonas::find($id);

        if (count($zonas)==0)
        {
            // Devolvemos error codigo http 404
            return response()->json(['error'=>'No existe la ciudad con id '.$id], 404);
        }      

        // Listado de campos recibidos teóricamente.
        $nombre=$request->input('nombre');
        $coordenadas=$request->input('coordenadas');
        $costo=$request->input('costo');

        // Creamos una bandera para controlar si se ha modificado algún dato.
        $bandera = false;

        // Actualización parcial de campos.
        if ($nombre != null && $nombre!='')
        {
            $zonas->nombre = $nombre;
            $bandera=true;
        }

        if ($coordenadas != null && $coordenadas!='')
        {
            $zonas->coordenadas = $coordenadas;
            $bandera=true;
        }

        if ($costo != null && $costo!='')
        {
            $zonas->costo = $costo;
            $bandera=true;
        } 

        if ($bandera)
        {
            // Almacenamos en la base de datos el registro.
            if ($zonas->save()) {

                return response()->json(['message'=>'Zona editada con éxito.',
                    'zona'=>$zona], 200);
            }else{
                return response()->json(['error'=>'Error al actualizar la ciudad.'], 500);
            }
            
        }
        else
        {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 304 Not Modified – [No Modificada] Usado cuando el cacheo de encabezados HTTP está activo
            // Este código 304 no devuelve ningún body, así que si quisiéramos que se mostrara el mensaje usaríamos un código 200 en su lugar.
            return response()->json(['error'=>'No se ha modificado ningún dato a la ciudad.'],409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zona=\App\Zonas::find($id);

        if ($zonas->delete()) {
            return response()->json(['message'=>'Se ha eliminado correctamente el blog.'], 200);
        }else{
            return response()->json(['message'=>'Se no se pudo eliminar la zona.'], 409);
        }

        
    }
}
