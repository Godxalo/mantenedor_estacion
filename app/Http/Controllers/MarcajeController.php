<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;

class MarcajeController extends Controller
{
    public function index(){/* metodo encargado de mostrar pagina principal */
        $estaciones = Estacion::all();
        
        
        return view('index', compact('estaciones'));
     }   

    public function store(Request $request){
        
        $request->validate([ /* validar campos*/
            'estab' => 'required',
            'dispo' => 'required',
            'ip' => 'required'
        ]);    

        $estacion = new Estacion();

        $estacion->establecimiento=$request->estab;
        $estacion->descripcion=$request->dispo;
        $estacion->estado=$request->estado;
        $estacion->ip=$request->ip;

    $estacion->save();
    return redirect('');
    }

    public function edit($id){
        $estacion = Estacion::find($id);
    }
    
    public function update(Request $request, Estacion $estacion){
        $estacion->establecimiento=$request->estab;
        $estacion->descripcion=$request->dispo;
        $estacion->estado=$request->estado;
        $estacion->ip=$request->ip;

        $estacion->save();
        return redirect('');

    }
}
