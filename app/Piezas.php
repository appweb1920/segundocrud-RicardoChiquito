<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $table = "Piezas";
    protected $filleable = ['Nombre','Descripcion','Numero de Piezas','Costo'];
}
