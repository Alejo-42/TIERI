<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\empresa;
use App\Models\Inicio;
use App\Models\MisVis;
use App\Models\Red;
use App\Models\SEO;
use App\Models\Service;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        $servicios = Service::where('status','activo')->get();
        $redes = Red::where('status','activo')->get();
        $Mision = MisVis::where('status', 'activo')->where('id', 2)->first();
        $Vision = MisVis::where('status', 'activo')->where('id', 3)->first();
        $SobreNosotros = MisVis::where('status', 'activo')->where('id', 1)->first();
        $empresa = empresa::where('id', 1)->first();
        $inicio = Inicio::where('status','activo')->get();
        $card = Card::where('id','1')->first();
        $seo = SEO::where('id','1')->first();
       // dd($statusCard);
        return view('paginaWeb.pagina', compact(
        'servicios',
        'redes', 
        'Mision', 
        'Vision',
        'SobreNosotros',
        'empresa',
        'inicio',
        'card',
        'seo'
        ));
    }

    public function redirect(){
        $redes = Red::where('status','activo')->get();
        $empresa = empresa::where('id', 1)->first();
        return view('paginaWeb.404', compact('redes','empresa'));
    }
}
