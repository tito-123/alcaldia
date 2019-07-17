<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\SenalTipo;
use App\SenalCategoria;
use App\Senalizacione;
use App\DetalleSenal;
use GuzzleHttp\Client;
Use Session;
Use Redirect;
use Image;

class SeñalizacionController extends Controller
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
  
    public function create(Request $request)
    {
            

            $data=request()->all();
            $tipo=$data['tipo'];
            $categoria=$data['categoria'];               
            $tipo=SenalTipo::where('detalle','=', $tipo)->first();
            $categoria=SenalCategoria::where('detalle','=', $categoria)->first();
 
     
              $detalle=$data['detalle'];
   
              $detalle=str_random(10).'.'.'png';
      
            $imagen = base64_encode(file_get_contents($request->file('file')->path()));

              $ruta = '/img/'.$detalle;


                $senal = new Senalizacione([
                    'detalle' => $data['detalle'],
                    'codigo' => $data['codigo'],
                    'id_tipo' => $tipo->id,
                    'id_categoria' => $categoria->id,
                    'ruta' => $imagen,
                    
                ]);
  

                        $client = new Client([
                          // Base URI is used with relative requests
                          'base_uri' => 'http://localhost:8089',
                          // You can set any number of default request options.
                          'timeout'  => 20.0,
                      ]);
                   
                        $response = $client->post('senalCreate', [
                        'headers' => ['Content-Type' => 'application/json'],
                        'body' =>json_encode($senal)
                            ]);
    
           $senals = json_decode($response->getBody());

          //   dd($senals[0]);
   
           if($senals[0]=="success"){
          
              Session::flash('message',"señal ingresada con exito");
              return Redirect::to('/registrarSeñal');
           
                
           }else{

              Session::flash('error',$senals[0]);
              return Redirect::to('/registrarSeñal');


           }
   

  
    }

    public function modificarSeñal(Request $request)
    {
            
        $data=request()->all();
            $tipo=$data['tipo'];
            $categoria=$data['categoria'];               
            $tipo=SenalTipo::where('detalle','=', $tipo)->first();
            $categoria=SenalCategoria::where('detalle','=', $categoria)->first();
 
    
            //  $detalle=$data['detalle'];
                $file=$request->file('file');
                  if($file!=null)
           {
   
             // $nombreImagen=str_random(10).'.'.'png';
      
            $imagen = base64_encode(file_get_contents($request->file('file')->path()));

              //$ruta = '/img/'.$nombreImagen;


                $senal = new Senalizacione([
                    'id'=>$data['id'],
                    'detalle' => $data['detalle'],
                    'codigo' => $data['codigo'],
                    'id_tipo' => $tipo->id,
                    'id_categoria' => $categoria->id,
                    'ruta' => $imagen,
                    
                ]);

             }else{

                 $senal = new Senalizacione([
                    'id'=>$data['id'],
                    'detalle' => $data['detalle'],
                    'codigo' => $data['codigo'],
                    'id_tipo' => $tipo->id,
                    'id_categoria' => $categoria->id,
                    'ruta' => "vacio",
                    
                ]);

             }
  //dd($senal);
                        $client = new Client([
                          // Base URI is used with relative requests
                          'base_uri' => 'http://localhost:8089',
                          // You can set any number of default request options.
                          'timeout'  => 20.0,
                      ]);
                   
                        $response = $client->post('modificarSenal', [
                        'headers' => ['Content-Type' => 'application/json'],
                        'body' =>json_encode($senal)
                            ]);
    //dd($senal);
           $senals = json_decode($response->getBody());

          //dd($senals[0]);
   
           if($senals[0]=="success"){
          
              Session::flash('modificar',"señal ingresada con exito");
              return Redirect::to('/señalizaciones');
           
                
           }else{

              Session::flash('error',$senals[0]);
              return Redirect::to('/señalizaciones');


           }
   

  
    }

     public function vistaModificar(Request $request,$id)
    {
          // $señalizacione = Senalizacione::find($id);

       $senal = new Senalizacione([               
                    'codigo' => $id,   
                ]);

           $client = new Client([
                          // Base URI is used with relative requests
                          'base_uri' => 'http://localhost:8089',
                          // You can set any number of default request options.
                          'timeout'  => 20.0,
                      ]);
                   
                        $response = $client->post('senal', [
                        'headers' => ['Content-Type' => 'application/json'],
                        'body' =>json_encode($senal)
                            ]);
    
           $señalizacione = json_decode($response->getBody());



        return view('adm.señalizaciones.modificar.index', compact('señalizacione'));
    }

     public function eliminar(Request $request,$id)
    {      

      $senal = new Senalizacione([               
                    'codigo' => $id,   
                ]);

           $client = new Client([
                          // Base URI is used with relative requests
                          'base_uri' => 'http://localhost:8089',
                          // You can set any number of default request options.
                          'timeout'  => 20.0,
                      ]);
                   
                        $response = $client->post('eliminarSenal', [
                        'headers' => ['Content-Type' => 'application/json'],
                        'body' =>json_encode($senal)
                            ]);
    
           $senals = json_decode($response->getBody());
     //      dd($senals);

           if($senals[0]=="success"){
          
              Session::flash('message',"señal eliminada con exito");
              return Redirect::to('/señalizaciones');      
           }else{

              Session::flash('error',"se produjo un error al eliminar");
              return Redirect::to('/señalizaciones');


           }
 /*
          $detalleSeñal=DetalleSenal::where('id_senal','=', $id);
           $detalleSeñal->delete();
           $señalizacion=Senalizacione::find($id);

           $señalizacion->delete();

         return redirect()->back();*/
    }
}
