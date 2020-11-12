<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Piezas extends Model
{
    use SoftDeletes;
    protected $table = "Piezas";
    protected $filleable = ['Nombre','Descripcion','NumeroPiezas','Costo'];
}
