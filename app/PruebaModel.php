<?php

namespace prueba;

use Illuminate\Database\Eloquent\Model;

class PruebaModel extends Model
{
    protected $table = "persona";

    protected $primarykey = "telefono";
    public $timestamps= false;

    protected $fillable = [
    	'nombre',
    	'direccion',
    	'sexo'
    ];

    protected $guarded = [

    ];



}
