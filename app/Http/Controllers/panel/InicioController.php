<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $home = Inicio::where('status','activo')->get();
        return view('Admin.home.index', compact('home'));
    }

    /**
     * create retorna la interfaz para crear una nueva red social
     */
    public function create(){
        return view('Admin.home.create');
    }
    /**
     * store crear una nueva red social 
     */

    public function store(Request $request){

        $inicio = $request->all();
       // dd($inicio);

        /**
         * permite cargar una imagen y la almacena en la carpeta publica
         * $nombreI almacene la direccion de la imagen
         */
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $inicio['image'] = "$nombreI";
        }

        Inicio::create($inicio);
        return redirect()->to('/inicio');
    }
    /**
     * edit retorna una vista para editar una red social
     */

    public function edit($id){
        $home = Inicio::find($id);
        return view('Admin.home.edit', compact('home'));
    }

    /**
     * update permite actualizar una red social
     */

    public function update(Request $request, Inicio $home, $img){
    
        //dd($request->id);
        $datos = $request->all();
        //dd($datos);
        $home = Inicio::find($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = "$img";
        }

        //dd($inicio['image']);

        $home->update($datos);
        return redirect()->to('/inicio');

    }
    /**
     * status permite actualizar el estado de una red social
     */

    public function status($id){
        $estado = Inicio::find($id);
        if($estado->status == 'activo'){
            
           Inicio::where('id', $id)->update(['status'=> 'desactivo']);
        }else{
            Inicio::where('id', $id)->update(['status'=> 'activo']);
        }
        return redirect()->to('/inicio');

    }
    public function indexD(){
        $home = Inicio::where('status','desactivo')->get();
        return view('Admin.home.indexD', compact('home'));
    }
}
