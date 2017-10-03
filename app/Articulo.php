<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model{
    
    protected $table = 'articulos'; //la tabla se llama articulos va en plural siempre

      protected $fillable = ['nombre', 'descripcion'];





    
}
