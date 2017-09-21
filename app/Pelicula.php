<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    //public $primaryKey = "idPelicula";
    //public $timestamps = false;
    //Aclararle a Laravel campos modificables

    //Opcion 1: Decirle a Laravel cuales SI puede modificar
    //public $fillable = ["id","title","ranking"];
    //Opcion 2: Decirle a Laravel cuales NO puede
    public $guarded = [];
}
