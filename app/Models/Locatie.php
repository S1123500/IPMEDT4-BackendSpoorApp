<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locatie extends Model
{
    
    public $table = "locatie";

    
    protected $casts = [
        'coordinaten' => 'array'
    ];

    public $timestamps = false;
    
}
