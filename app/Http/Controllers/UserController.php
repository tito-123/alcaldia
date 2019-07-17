<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Persona;
class UserController extends Controller
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

    public function index(Request $request)
    {
    	$name  = $request->get('name');
    	
    	    	$users = User::orderBy('id', 'DESC')
    		->name($name)
    		->paginate(1);
    		
    	return view('adm.usuarios.gestionar.index', compact('users'));
    }

      public function registrarView()
    {
        
     //       $users = Persona::all();
   //         dd($users[1]->id);
        return view('adm.usuarios.gestionar.registrar.index');
    }

     public function vistaModificar(Request $request,$id)
    {
           $user = User::find($id);
           $idpersona=$user->id_persona;
            $persona = Persona::find($idpersona);

        return view('adm.usuarios.gestionar.modificar.index', compact('user','persona'));
    }
public function eliminar(Request $request,$id){

       $user = User::find($id);
           $user->delete();

         return redirect()->back();

}

 function verificarUser(Request $request){

        return response()->json($request);
 }
 
public function modificar(Request $request,$id){

      /*$request->validate(  [  
            'nombre' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255','unique:users'],
            'apPaterno' => ['required', 'string', 'max:255'],
            'apMaterno' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           
        ]);

         $user = User::find($id);
         $persona = Persona::find($user->id_persona);

      $persona->nombre = $request->get('share_name');
      $persona->ci = $request->get('share_price');
      $persona->ap_paterno = $request->get('share_qty');
      $persona->ap_materno = $request->get('share_qty');

      if($file!=null)
        {       
              $detalle=$user->name;
              $detalle=$detalle.'.png';
              $file = $request->file('file');
              $ruta = '/img/'.$detalle;
               \Storage::disk('local')->put($detalle,  \File::get($file));
        }
      $share->save();*/

      return redirect()->back();

}


  public function registrarUsu(Request $request)
    {

         $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255','unique:users'],
            'apPaterno' => ['required', 'string', 'max:255'],
            'apMaterno' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],['name.unique'=>'El usuario ingresado ya existe',
           'email.unique'=>'El email ingresado ya existe',
            'ci.numeric'=>'Solo se permiten numeros',
        'password.min'=>'se requiere un minimo de 8 caracteres',
    'password.confirmed'=>'La contraseña ingresada no coincide',]);
 
        $data=request()->all();  
            $detalle=$data['name'];
            $detalle=$detalle.'.png';
              $file = $request->file('file');
              $ruta = '/img/'.$detalle;
               \Storage::disk('local')->put($detalle,  \File::get($file));

 $persona= new Persona();
 $persona->nombre=$data['nombre'];
       $persona->ap_paterno =$data['apPaterno'];
      $persona->ap_materno= $data['apMaterno'];
            $persona->ci =$data['ci'];
            $persona->foto = $ruta;
 $persona->save();

         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_persona' => $persona->id,
            'id_tipo_usu' => 1,
            'id_estado_usu' => 1,
        ]);

          return back()->with('success', 'User created successfully.');
    }


}
