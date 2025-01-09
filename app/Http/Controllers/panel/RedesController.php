<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Red;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    public function index(){
        $redes = Red::where('status','activo')->get();
        return view('Admin.redes.index', compact('redes'));
    }

    /**
     * create retorna la interfaz para crear una nueva red social
     */
    public function create(){
        return view('Admin.redes.create');
    }
    /**
     * store crear una nueva red social 
     */

    public function store(Request $request){

        //dd( Red::create($request->all()));

        Red::create($request->all());
        return redirect()->to('/redes');
    }
    /**
     * edit retorna una vista para editar una red social
     */

    public function edit($id){
        $edit = Red::find($id);
        return view('Admin.redes.edit', compact('edit'));
    }

    /**
     * update permite actualizar una red social
     */

    public function update(Request $request, Red $red){
    
        //dd($request->id);
        $datos = $request->all();
        $red = Red::find($datos['id']);
        $red->update($datos);
        return redirect()->to('/redes');

    }
    /**
     * status permite actualizar el estado de una red social
     */

    public function status($id){
        $estado = Red::find($id);
        if($estado->status == 'activo'){
            
           Red::where('id', $id)->update(['status'=> 'desactivo']);
        }else{
            Red::where('id', $id)->update(['status'=> 'activo']);
        }
        return redirect()->to('/redes');

    }
    public function indexD(){
        $redes = Red::where('status','desactivo')->get();
        return view('Admin.redes.indexD', compact('redes'));
    }
}
