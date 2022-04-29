<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //permite accedes a los campos a la tabla y modificarlos
    protected $fillable = ['nombre', 'descripcion', 'imagen'];
}
