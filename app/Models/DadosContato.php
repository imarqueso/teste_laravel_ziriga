<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosContato extends Model
{
    use HasFactory;

    protected $table = "leads";
    protected $fillable = ['nome', 'whatsapp', 'email', 'cargo', 'segmento', 'interesse'];
}
