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
        $Notification = new WoocomerseNotification();

        $Notification->nombre = $request->input('nombre');
        $Notification->contenido = $request->input('contenido');

        $Notification->save();
 
        return redirect('/Notificaciones/'.$Notification->id.'');
    
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $Notifications = WoocomerseNotification::findorfail($id);

        return view('showNotificaction',['Notifications'=>$Notifications]);

       // return "post".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Notifications = WoocomerseNotification::findorfail($id);

        return view('edit',['Notifications'=>$Notifications]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


       // return "Edited  Post";
       // return $request;
      $Notifications = WoocomerseNotification::find($id);
      $request->validate([
        'nombre'=>['required','min:5'],
        'contenido'=>['required','min:5'],]);

        $Notifications->nombre = $request->input('nombre');

        $Notifications->contenido = $request->input('contenido');
        $Notifications->save();

        session()->flash('status','Notifications actualizada');
 
        return to_route('listar');
        //return redirect('Notificaciones/'.$Notifications->id.'/edit?a=1');
    

 



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
