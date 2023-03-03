<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    protected $table = 'turmas';

    protected $fillable = [
        'nome',
        'descricao',
        'horas',
        'data_inicio',
        'data_fim',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
