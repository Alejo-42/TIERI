<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iluminacion;
use App\Models\Herramientas;
use App\Models\empresa;

class ProductsController extends Controller
{
    public function inicio(){
        return view('Admin/products/inicio');
    }
    public function buscar(Request $request){
        $empresa = empresa::where('id', 1)->first();
        $busqueda = $request->input('busqueda');
        $iluminacion = Iluminacion::where('name','like','%' . $busqueda . '%')->orWhere('description', 'like', '%'. $busqueda . '%')->get();
        $herramientas = Herramientas::where('name','like','%'. $busqueda . '%')->orWhere('description', 'like', '%'. $busqueda . '%')->get();
        
        return view('paginaWeb.products.resultados',compact('iluminacion','herramientas','empresa'));
    }

    public function productos(){
        $iluminacion = Iluminacion::all();
        $herramientas = Herramientas::all();
        return view('paginaWeb.products.index',compact('iluminacion','herramientas'));
    }

}
