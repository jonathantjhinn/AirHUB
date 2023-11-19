<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchasedlist extends Model
{
    protected $table = 'purchasedlist';

    protected $fillable = [
        'listid', 'fullname', 'depart', 'arrival', 'planecode','datedepart', 'datearrival', 'gate', 'phone', 'email', 'cardnumber', 'cardname', 'optionalfood', 'updated_at', 'created_at'
    ];
}
