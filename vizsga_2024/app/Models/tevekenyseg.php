<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tevekenyseg extends Model
{
    use HasFactory;
    protected $fillable = [
        'tevekenyseg_id',
        'tevekenyseg_nev',
        'pontszam',
    ];

}
