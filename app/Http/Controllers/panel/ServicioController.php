<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(){
        $servicios = Service::where('status','activo')->get();
        return view('admin.servicios.index', compact('servicios'));
    }

    public function create(){
        return view('admin.servicios.create');
    }

    public function store(Request $request){

        $servicio = $request->all();

        /**
         * permite cargar una imagen y la almacena en la carpeta publica
         * $nombreI almacene la direccion de la imagen
         */
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $servicio['image'] = "$nombreI";
        }
        /**
         * $link guarda un link de ws, y concatenamos el numero y nombre del servicio
         */
        $link = 'https://wa.me/593'.$servicio['contact'].'?text=Buenas%20tardes,%20quiero%20informaci%C3%B3n%20sobre%20el%20servicio%20de%20'.$servicio['title'];

        $servicio['link'] = $link;
        Service::create($servicio);
        return redirect()->to('/servicios');
    }

    public function edit($id){
        $servicio = Service::findOrFail($id);
        return view('admin.servicios.edit' , compact('servicio'));
    }

    public function update(Request $request, Service $service, $img){
  
        $datos = $request->all();
        $service = Service::findOrFail($datos['id']);
      
        /**
         * permite cargar una imagen y la almacena en la carpeta publica
         * $nombreI almacene la direccion de la imagen
         */
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = $img;
        }

        /**
         * $link guarda un link de ws, y concatenamos el numero y nombre del servicio
         */
        $link = 'https://wa.me/593'.$datos['contact'].'?text=Buenas%20tardes,%20quiero%20informaci%C3%B3n%20sobre%20el%20servicio%20de%20'.$datos['title'];
        $datos['link'] = $link;
        $service->update($datos);
        return redirect()->to('/servicios');
    }

    public function status($id){
        $estado= Service::find($id);

        if($estado->status == "activo"){
            Service::where('id', $id)->update(['status' => "desactivo"]);
        }else{
            Service::where('id', $id)->update(['status' => "activo"]);
        }

        return redirect()->to('/servicios');
    }

    public function desactivo(){
        
        $servicios = Service::where('status','desactivo')->get();
        return view('admin.servicios.indexD', compact('servicios'));
    }
}
