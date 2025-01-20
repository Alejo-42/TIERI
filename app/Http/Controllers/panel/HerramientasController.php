<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use App\Models\Herramientas;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    public function index(){
        $herramientas = Herramientas::where('status','activado')->get();
        return view('Admin/herramientas/index',compact('herramientas'));
    }

    public function create(){
        return view('Admin/herramientas/create');
    }

    public function store(Request $request){
        $herramienta = $request->all();

        if ($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $herramienta['image'] = "$nombreI";
        }
        Herramientas::create($herramienta);
        return redirect()->to('/herramientas');
    }

    public function edit($id){
        $herramienta = Herramientas::find($id);
        return view('Admin/herramientas/edit',compact('herramienta'));
    }

    public function update(Request $request, Herramientas $herramienta, $img){
        $datos = $request->all();
        $herramienta = Herramientas::findOrFail($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = $img;
        }

        $herramienta->update($datos);
        return redirect()->to('/herramientas');
    }

    public function status($id){
        $estado = Herramientas::find($id);

        if ($estado->status == "activado") {
            Herramientas::where('id', $id)->update(['status' => "desactivado"]);
        }else{
            Herramientas::where('id', $id)->update(['status' => "activado"]);
        }
        return redirect()->to('/herramientas');  
    }
 
    public function indexD(){
        $herramientas = Herramientas::where('status','desactivado')->get();
        return view('Admin/herramientas/indexD',compact('herramientas'));
    }
}
