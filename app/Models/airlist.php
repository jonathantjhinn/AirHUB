<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airlist extends Model
{
    protected $table = 'airlist';

    protected $fillable = [
        'planecode', 'depart', 'arrival', 'datedepart', 'datearrival', 'gate', 'price', 'class'
    ];
}
