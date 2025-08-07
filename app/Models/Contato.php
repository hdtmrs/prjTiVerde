<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'tbcontato';

    protected $fillable = [
        'titulo',
        'mensagem',
        'email',
    ];

    public $timestamps = true;

    protected $casts = [
        'titulo' => 'string',
        'mensagem' => 'string',
        'email' => 'string',
    ];
}
