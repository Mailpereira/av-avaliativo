<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localidade extends Model
{
    use HasFactory;

    protected $fillable = ['localidade'];

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
