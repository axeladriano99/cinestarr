<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Peliculas extends Controller
{
    public function show($id){
        $pelicula = DB::table('pelicula')->where('id',$id)->get();
        $nomb = DB::table('pelicula')
        ->join('genero', 'pelicula.Generos', 'LIKE', DB::raw("CONCAT('%', genero.id, '%')"))
        ->where('pelicula.id', $id)
        ->pluck('genero.Detalle')
        ->toArray();
        

        return view('pelicula',compact('pelicula','nomb'));
    }
}
