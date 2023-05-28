<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\WoocomerseNotification;


class WoocomerseNotificationController extends Controller
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

       // $Notificaciones = DB::table('notificaciones')->get();
        $Notifications = WoocomerseNotification::get();


        return view('Listar',['Notifications'=>$Notifications]);
        

    }


    public function FormTest()
    {
      
        
      /*  $Notificaciones = [
            ['nombre'=>'Inicio','contenido'=>'contenidooooo1','fecha'=>'2023-05-01'],
            ['nombre'=>'Por vencer','contenido'=>'contenidooooo2','fecha'=>'2023-05-02'],
            ['nombre'=>'Vencido','contenido'=>'contenidooooo3','fecha'=>'2023-05-03']
        ];*/

        $Notifications = WoocomerseNotification::get();

        return view('testEmail',['Notifications'=>$Notifications]);
        

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
