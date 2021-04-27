<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $table = 'funcao';
    protected $fillable = ['nome_funcao','cbo','tipo_cbo','slug'];
}
