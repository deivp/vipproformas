<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Company;
use App\State;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $states = State::all();
        $user_data = User::where('id',Auth::user()->id)->first();
        return view('panel.user.datosPersonales', compact('user_data','states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function edit(User $user)
    {
        return "mostrar datos a editar";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        
        $datos = request()->validate([
            
            'lastname'=>'required',
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$user->id,
            'dni'=>'required|min:10',
            'movil'=>'required|numeric|min:9',
            'studies'=>'',
            'prov'=>'required',
        ],
        [
            'name.required'=>'No ha ingresado su nombre',
            'lastname.required'=>'No ha ingresado su apellido',
            'email.required'=>'No ha ingresao ningún correo',
            'email.unique'=>'Este correo ya sido ingresado',
            'movil.required'=>'No ha ingresado numero de celular',
            'movil.numeric'=>'Número incorrecto',
            'movil.min'=>'Número incorrecto',
            'dni.required'=>'Debe ingresar su # de Cédula',
            'dni.min'=>'Cédula o RUC incorrecta',
            'prov.required'=>'Debe elegir una provincia',
        ]
        );
        
        $datos = request()->all();
        $user->update($datos);
        //User::where('id',Auth::user()->id)->update($datos);
       
        return redirect()->route('panel.datos_personales');
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
