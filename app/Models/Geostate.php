<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geostate extends Model
{
    /** @use HasFactory<\Database\Factories\GeostateFactory> */
    use HasFactory;

    protected $fillable = [
        'geostate_name',
        'abbr'
    ];
}
