<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    
    
    public function index(){
        $card = Card::all();
        return view('Admin.card.index', compact('card'));
    }

    public function edit($id){
        $Card = Card::find($id);
        return view('Admin.card.edit', compact('Card'));
    }
    public function update(Request $request, Card $Card, $img){
        
        //dd($imagen);
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $Card = Card::find($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = "$img";
        }

        $Card->update($datos);
        return redirect()->to('/card');

    }


    public function status($id){
        $estado= Card::find($id);

        if($estado->status == "activo"){
            Card::where('id', $id)->update(['status' => "desactivo"]);
        }else{
            Card::where('id', $id)->update(['status' => "activo"]);
        }

        return redirect()->to('/card');
    }
}
