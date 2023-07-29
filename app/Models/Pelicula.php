<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    public  $timestamps =false;
    protected $fillable=['id','Titulo','FechaEstreno','Director','Generos','idClasificacion','idEstado','Duracion','Link','Reparto','Sinopsis'];
}
