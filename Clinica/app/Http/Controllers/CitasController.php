<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mpociot\BotMan\BotMan;
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
        $cita->email=$request->get('emails');
        $cita->tratamiento=$request->get('tratamiento');
        $cita->registro=$request->get('registro');
        $cita->notas=$request->get('notas');
        $cita->save();
        
        $telegram=  \App\User::find(1)->telegram;
        $ttrue = "\n" . 'Notificacion Pagina Web' . "\n" . 'Nombre: => ' . $cita->nombre. "\n" . 'Telefono: => ' .$cita->telefono. "\n" . 'Tratamiento: => '.$cita->tratamiento."\n".'Fecha: => ' .  $cita->fecha. "\n".'Hora: => '  .  $cita->fechaInicio. "\n". 'Notas: => ' .  $cita->notas. "\n";
        $datatrue = array('text' => $ttrue, 'chat_id' => $telegram);
//dd($telegram);
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
        //file_get_contents('https://api.whatsapp.com/send?phone=524445705494&text=Hola,%20quiero%20agendar%20una%20cita%20en%20Cl%C3%ADnica%20CoralCita a nombre de : '.$cita->nombre.'Telefono:'.$cita->telefono.'Fecha:'.$cita->fecha.'Copia enviada a tu telefono o correo ');
        //dd($telegram);
        $headers = 'To: New User' . "\r\n";
        $headers = 'From: iServer' . "\r\n";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $to  = 'gomezlopeznapoleon@gmail.com';
        $subject = 'Reserva Odontologia Medica Coreal';
        $message = '<table style="background:none repeat scroll 0% 0% rgb(244,244,244);border:1px solid rgb(102,102,102)" border="0" cellpadding="5" cellspacing="5" width="600">
            <tbody>
                <tr>
                    <th style="background-color:rgb(204,204,204)">HollyBoss Notification</th>
                </tr>
                <tr>
                    <td style="text-align:left" valign="top">
                    <br>
                    <strong>Correo:</strong> '.$cita->email.'<br>
                    <strong>Nombre:</strong> '.$cita->nombre.'<br><br>
                    <hr>
                    <strong>Tratamiento:</strong>'. $cita->tratamiento.'<br><br>
                    <strong>Notas:</strong>'.$cita->notas.'<br><br>
        
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left"><em>Odontologia Medica Coral<br><br>
                    </td>
                </tr>
            </tbody>
        </table>';
        mail($to, $subject, $message, $headers);
        
        \Session::flash('status',"Correo Enviado a $cita->email");
        \Session::flash('status','Cita a nombre de : '.$cita->nombre.'Telefono:'.$cita->telefono.'Fecha:'.$cita->fecha.'Copia enviada a tu telefono o correo');
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     *     
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function telegram(Request $request,$id)
    {
    
    $user= \App\User::find($id);    
    $user->telegram=$request->get('telegram');
    $user->save();
    \Session::flash('success','Actualizado Telegram');

    return back();
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
