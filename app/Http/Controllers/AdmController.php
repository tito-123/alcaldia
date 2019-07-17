<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Persona;
use App\Senalizacione;
use App\SenalTipo;
use App\SenalCategoria;
use GuzzleHttp\Client;
use Sujip\Guid\Guid;
Use Session;
Use Redirect;
class AdmController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=auth()->user()->id_persona;
           $persona=Persona::find($id);

        return view('adm.usuarios.index',compact('persona'));
    }

      public function inicio()
    {
           /* $guid = new Guid;

            $guid = $guid->create();
            dd($guid);*/
        return view('adm.inicio.index');
    }

    public function contribuciones()
    {
        /*  $senals = Senalizacione::orderBy('id', 'DESC')
            ->paginate(10);*/

              $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:8089',
                // You can set any number of default request options.
                'timeout'  => 20.0,
            ]);

            $response = $client->request('GET', 'insidencias');
   
         $insidencias=json_decode($response->getBody()->getContents());
       //  dd($insidencias);
   
        //return view('adm.señalizaciones.index', compact('senals'));
        return view('adm.contribuciones.index', compact('insidencias'));
    }

    public function señalizaciones()
    {
       /*  $senals = Senalizacione::orderBy('id', 'DESC')
            ->paginate(10);*/

              $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:8089',
                // You can set any number of default request options.
                'timeout'  => 20.0,
            ]);

            $response = $client->request('GET', 'senals');
   
         $senals=json_decode($response->getBody()->getContents());
        // dd($senals);
   
        return view('adm.señalizaciones.index', compact('senals'));

    }

public function gestionarUsuario()
    {
        
       
     /*   $users = User::orderBy('id', 'DESC')->estado(1)
            ->paginate(10);*/


            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:8089',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);

            $response = $client->request('GET', 'users');
   
         $users=json_decode($response->getBody()->getContents());
        return view('adm.usuarios.gestionar.index', compact('users'));
    }


public function vistaRegistrarSeñal()
    {   
           $tipos = SenalTipo::All();
        $categorias = SenalCategoria::All();

        return view('adm.señalizaciones.registrar.index', compact('tipos','categorias'));
    }
}
