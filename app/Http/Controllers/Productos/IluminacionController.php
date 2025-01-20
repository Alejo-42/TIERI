<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iluminacion;

class IluminacionController extends Controller
{
        public function index(){
        $productos = Iluminacion::where('status','activado')->get();
        return view('admin/products/iluminacion/index', compact('productos'));
    }

    public function create(){
        return view('admin/products/iluminacion/create');
    }

    public function store(Request $request){
        $producto = $request->all();

        if ($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $producto['image'] = "$nombreI";
        }
        Iluminacion::create($producto);
        return redirect()->to('/products/iluminacion');
    }

    public function edit($id){
        $product = Iluminacion::find($id);
        return view('admin/products/iluminacion/edit', compact('product'));
    }

    public function update(Request $request, Iluminacion $producto, $img){
        $datos = $request->all();
        $producto = Iluminacion::findOrFail($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = $img;
        }
        
        $producto->update($datos);
        return redirect()->to('/products/iluminacion');
    }

    public function status($id){
        $estado = Iluminacion::find($id);

        if ($estado->status == "activado") {
            Iluminacion::where('id', $id)->update(['status' => "desactivado"]);
        }else{
            Iluminacion::where('id', $id)->update(['status' => "activado"]);
        }
        return redirect()->to('/products/iluminacion');  
    }

    public function indexD(){
        $productos = Iluminacion::where('status','desactivado')->get();
        return view('admin/products/iluminacion/indexD', compact('productos'));
    }
}
