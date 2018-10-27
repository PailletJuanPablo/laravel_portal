<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escort;
use App\Categoria;
use App\Barrio;
class HomeController extends Controller
{
    public function index(){
        $escorts = Escort::get();
        return view('inicio',["escorts"=>$escorts]);
    }

    public function verEscort($id){
      $escort = Escort::find($id);
        return view('detalle',["escort"=>$escort]);
    }

    public function verPorCategoria($categoria){
        $categoria = Categoria::where('nombre', 'like', $categoria)->first();
        $escorts = Escort::where('categoria',$categoria->id)->get();
        return view('seccion',["escorts"=>$escorts,"categoria"=>$categoria]);
    }
    public function verPorGenero($genero){
        $escorts = Escort::where('genero',$genero)->get();
        return view('genero',["escorts"=>$escorts,"genero"=>$genero]);
    }
    public function verPorBarrio($nombre){
        $barrio = Barrio::where('nombre',$nombre)->first();
        return view('ver_por_barrio',["barrio"=>$barrio]);
    }
    public function verBarrios(){
        $barrios = Barrio::get();
        return view('barrios',["barrios"=>$barrios]);
    }
}
