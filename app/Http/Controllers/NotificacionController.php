<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
      
        
      /*  $Notificaciones = [
            ['nombre'=>'Inicio','contenido'=>'contenidooooo1','fecha'=>'2023-05-01'],
            ['nombre'=>'Por vencer','contenido'=>'contenidooooo2','fecha'=>'2023-05-02'],
            ['nombre'=>'Vencido','contenido'=>'contenidooooo3','fecha'=>'2023-05-03']
        ];*/

        $Notificaciones = DB::table('notificaciones')->get();

        return view('Listar',['Notificaciones'=>$Notificaciones]);
        

    }


    public function FormTest()
    {
      
        
      /*  $Notificaciones = [
            ['nombre'=>'Inicio','contenido'=>'contenidooooo1','fecha'=>'2023-05-01'],
            ['nombre'=>'Por vencer','contenido'=>'contenidooooo2','fecha'=>'2023-05-02'],
            ['nombre'=>'Vencido','contenido'=>'contenidooooo3','fecha'=>'2023-05-03']
        ];*/

        $Notificaciones = DB::table('notificaciones')->get();

        return view('testEmail',['Notificaciones'=>$Notificaciones]);
        

    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
