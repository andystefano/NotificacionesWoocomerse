<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\WoocomerseNotification;

use App\Mail\WoocomerseNotificationMailable;
use Illuminate\Support\Facades\Mail;


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
//        $Notifications = WoocomerseNotification::get(); //funciona ok

$Notifications = WoocomerseNotification::paginate(5);



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



        $rules = [
            'nombre' => 'required|string|max:255',
            'contenido' => 'required|string|min:6',
            'imagen' => 'required|image|mimes:jpg,jpeg,png',
        ];
    
        $validatedData = $request->validate($rules);

        

        $Notification->nombre = $request->input('nombre');
        $Notification->contenido = $request->input('contenido');



        if($validatedData){
        
            $Notification->save();

        if($request->hasFile("imagen")){
            $rutaDestino = "media/".$Notification->id;
            $imagen = $request->file("imagen");
           // $image_name = $imagen->getClientOriginalName();
            
            $image_name = "IP.".$request->imagen->extension();
            $request->imagen->move($rutaDestino,$image_name);  
            
        }

        }else{

            
        }
 
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

    public function testEnvio()
    {

        $nombre = "Andy Hormazabal";

        $correo = new WoocomerseNotificationMailable($nombre);

        Mail::to("andy@andy.cl")->send($correo);

      


        return view('WoocomerseNotifications.testEnvio');

      //  return view('WoocomerseNotification.testEnvio');
        
    }   


}
