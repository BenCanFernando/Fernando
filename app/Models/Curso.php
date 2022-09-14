<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public $table= 'cursos';
    public $fillable =[
    	'nombre',
    	'descripcion',
    	'fehcha_inicio',
    	'fecha_fin',
    	'estado'

    ];
}
