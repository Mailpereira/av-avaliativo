<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VinculoEscola extends Model
{
    use HasFactory;

    protected $fillable = ['escola_id', 'serie_id', 'turma_id', 'localidade_id', 'turno_id'];

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }

    public function localidade()
    {
        return $this->belongsTo(localidade::class);
    }
}
