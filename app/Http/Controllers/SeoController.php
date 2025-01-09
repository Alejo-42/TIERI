<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(){
        $seo = SEO::all();
        return view('Admin.seo.index', compact('seo'));
    }

    public function edit($id){
        $edit = SEO::find($id);
        return view('Admin.seo.edit', compact('edit'));
    }

    public function update(Request $request, SEO $seo){
    
        //dd($request->id);
        $datos = $request->all();
        $seo = SEO::find($datos['id']);
        $seo->update($datos);
        return redirect()->to('/seo');

    }
}
