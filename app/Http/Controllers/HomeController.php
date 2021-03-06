<?php

namespace App\Http\Controllers;

use App\Barrio;
use App\Categoria;
use App\Escort;

class HomeController extends Controller
{
    public function index()
    {
        $escorts = Escort::get();
        return view('inicio', ["escorts" => $escorts]);
    }

    public function terminos()
    {
        return view("terminos");
    }

    public function verEscort($slug)
    {
        $escort = Escort::where("slug", $slug)->first();
        return view('detalle', ["escort" => $escort]);
    }

    public function verPorCategoria($categoria)
    {
        $categoria = Categoria::where('nombre', 'like', $categoria)->first();
        $escorts = Escort::where('categoria', $categoria->id)->get();
        return view('seccion', ["escorts" => $escorts, "categoria" => $categoria]);
    }
    public function verPorGenero($genero)
    {
        $escorts = Escort::where('genero', $genero)->get();
        return view('genero', ["escorts" => $escorts, "genero" => $genero]);
    }
    public function verPorBarrio($nombre)
    {
        $barrio = Barrio::where('nombre', $nombre)->first();
        return view('ver_por_barrio', ["barrio" => $barrio]);
    }
    public function verBarrios()
    {
        $barrios = Barrio::get();
        return view('barrios', ["barrios" => $barrios]);
    }
}
