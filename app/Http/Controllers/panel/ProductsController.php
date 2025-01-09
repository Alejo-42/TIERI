<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __invoke(){
        $products = Products::where('status','activo')->get();
        return view('admin.products.index',compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){
        $servicio = $request->all();

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $servicio['image'] = "$nombreI";
        }        

        Products::create($servicio);
        return redirect()->to('/products');
    }

    public function edit($id){
        $product = Products::find($id);
        return view('admin.products.edit',compact('product'));
    }

    public function udpate(Request $request, Products $products, $img){
        $datos = $request->all();
        $products = Products::findOrFail($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = $img;
        }

        $products->udpate($datos);
        return redirect()->to('/products');

        
    }
    public function status($id){
        $estado = Products::find($id);

        if ($estado->status == "activo") {
            Products::where('id', $id)->update(['status' => "desactivo"]);
        }else{
            Products::where('id', $id)->update(['status' => "activo"]);
        }

        return redirect()->to('/products');
    }
    public function indexD(){
        $products = Products::where('status','desactivo')->get();
        return view('admin.products.indexD',compact('products'));
    }
}
