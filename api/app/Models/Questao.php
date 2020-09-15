<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questao';

    protected $primaryKey = 'id_questao';

    public $timestamps = false;

    protected $fillable = [
        'descricao',
        'orgao_id',
        'banca_id',
        'assunto_id',
    ];

    public function orgao()
    {
        return $this->hasOne(
            Orgao::class,
            'id',
            'orgao_id'
        );
    }

    public function banca()
    {
        return $this->hasOne(
            Banca::class,
            'id',
            'banca_id'
        );
    }

    public function assunto()
    {
        return $this->hasOne(
            Assunto::class,
            'id',
            'assunto_id'
        );
    }
}
