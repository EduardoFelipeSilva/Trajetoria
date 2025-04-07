<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{    
    use HasFactory;

    protected $table = "tb_Modulo";

    protected $fillable = [
        'Modulo',
    ];

    public $timestamps = false;

    
}
