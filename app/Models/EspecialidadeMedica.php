<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidadeMedica extends Model
{
    use HasFactory;
   // protected $table = 'especialidade_medica';
    protected $fillable = ['nome_especialidade_medica','slug'];
}
