<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opiniao extends Model
{
    use HasFactory;

    protected $table = "opiniao";

    protected $fillable = [
        'titulo',
        'nome',
        'empresa',
        'produto',
        'avaliacao',
        'data',
    ];
}
