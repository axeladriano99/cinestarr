<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cines extends Model
{
    use HasFactory;
    public  $timestamps =false;
    protected $fillable=['id','RazonSocial','Salas','idDistrito','Direccion','Telefonos'];
}
