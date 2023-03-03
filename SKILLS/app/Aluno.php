<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'contacto',
        'data_nascimento',
        'id_turma',
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
