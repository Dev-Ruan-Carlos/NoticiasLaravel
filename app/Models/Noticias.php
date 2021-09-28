<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table = 'tnoticias';
    protected $primaryKey = 'controle';
    protected $connection = 'criador';
    public $timestamps = false;
}
