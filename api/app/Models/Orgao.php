<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'orgao';
    protected $fillable = [
        'nome',
        'sigla',
    ];
}
