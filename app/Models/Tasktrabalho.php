<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasktrabalho extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descricao',
        'status',
    ];


}
