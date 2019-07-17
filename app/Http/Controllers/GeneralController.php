<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senalizacione;
use GuzzleHttp\Client;
class GeneralController extends Controller
{
    //

    public function mapa()
    {
        return view('visualizacion.index');
    }

     public function general()
    {

          /*    $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:8089',
                // You can set any number of default request options.
                'timeout'  => 20.0,
            ]);

            $response = $client->request('GET', 'senals');
   
         $senals=json_decode($response->getBody()->getContents());*/
         $senals = Senalizacione::All();
            
        return view('welcome',compact('senals'));

    }

     public function contactos()
    {

        return view('contactos.index');
    }
}
