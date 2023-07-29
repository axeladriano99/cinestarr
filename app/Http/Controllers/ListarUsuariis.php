<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class ListarUsuariis extends Controller
{
    //
    public function index(){
        $cine = DB::table('cine')
        ->select('cine.*')
        ->orderBy('id','ASC')
        ->get();
        return view('cines',compact('cine'));
    }
    public function Estrenos(){
        $peliculas = DB::table('pelicula')
        ->select('pelicula.*')
        ->orderBy('id','ASC')
        ->get();
        return view('peliculas',compact('peliculas'));
    }
    
    public function show($id)
    {
        $cine = DB::table('cine')->where('id', $id)->first();
        $info= DB::table('cinetarifa')->where('idCine',$id)->get();
        $peliculas= DB::table('cinepelicula')
        ->join('pelicula', 'cinepelicula.idPelicula', '=', 'pelicula.id')
        ->where('idCine', $id)
        ->select('pelicula.Titulo', 'cinepelicula.Horarios')
        ->get();

        return view('cine',compact('cine','info','peliculas'));
    }
    public function escape($id){
        $peliculas = DB::table('pelicula')->where('id',$id)->get();
        return view('pelicula',compact('peliculas'));
    }
    
}
