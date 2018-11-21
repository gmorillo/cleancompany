<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContacto;
use App\Mail\acuseRecibo;

class EmailController extends Controller
{
    public function enviarEmail(Request $request) {

        $nombre = $request['nombre'];
        $telefono = $request['telefono'];
        $email = $request['email'];
        $mensaje = $request['mensaje'];
        $to_email = 'infoweb@navalimp.es';
        $to_name = 'Navalimp Servicios Generales, S.L';

        $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
        $vars = 'secret=6LcJe3oUAAAAAGzS--20LU7RJcRihSLaUmruzLzO&response='. $request['g-recaptcha-response'];
        $ch = curl_init( $recaptchaURL );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $vars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $response_captcha = json_decode(curl_exec( $ch ), true);

        if ($response_captcha) {
            $resultado = Mail::to($to_email, $to_name)->send(new FormularioContacto($nombre, $telefono, $email, $mensaje));
            $response = [
                'resultado' => $resultado,
            ];

            //Acuse

            $resultado = Mail::to($email, $nombre)->send(new acuseRecibo($nombre, $telefono, $email, $mensaje));
            $response = [
                'resultado' => $resultado,
            ];
            
            return json_encode($response);
        } else {
            return false;
        }
    }
}
