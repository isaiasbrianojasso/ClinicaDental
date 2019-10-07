<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function enviar(Request $request)
    {
        $cita=new \App\Cita();
        $cita->telefono=$request->get('telefono');
        $cita->nombre=$request->get('nombre');
        $cita->fechaInicio=$request->get('fechaInicio');
        $cita->fecha=$request->get('date');
        $cita->notas=$request->get('notas');
        $cita->save();
        $ttrue = "\n" . 'Notificacion Pagina Web' . "\n" . 'Nombre: => ' . $cita->nombre. "\n" . 'Telefono: => ' .$cita->telefono. "\n" . 'Fecha: => ' .  $cita->fecha. "\n". 'Hora: => ' .  $cita->fechaInicio. "\n". 'Notas: => ' .  $cita->notas. "\n";
        $datatrue = array('text' => $ttrue, 'chat_id' => 142398483);
$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot901963830:AAFGG4nC8jW4rjp0thfbr16etEmFKabAEpc/sendMessage"); 
curl_setopt($c, CURLOPT_TIMEOUT, 30);
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
$postfields = $datatrue; 
curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
$response = curl_exec($c);
curl_close($c);
        //https://api.whatsapp.com/send?phone=524441400858&text=Hola,%20quiero%20agendar%20una%20cita%20en%20Cl%C3%ADnica%20Coral        
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
