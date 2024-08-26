<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $filleble = ['turma', 'localidade_id'];

    public function localidades()
    {
        return $this->belongsTo(localidade::class);
    }
}
