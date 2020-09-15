<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArvoreAssunto extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'arvore_assunto';
    protected $fillable = [
        'assunto_pai_id',
        'assunto_filho_id',
    ];

    public function assuntoPai()
    {
        return $this->hasOne(
            Assunto::class,
            'id',
            'assunto_pai_id'
        );
    }

    public function assuntoFilho()
    {
        return $this->hasOne(
            Assunto::class,
            'id',
            'assunto_filho_id'
        );
    }

}
