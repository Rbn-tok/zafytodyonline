<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5 extends Model
{
    protected $table = 'p5';
    protected $fillable = [

            'id_projet', 	'validation', 	'date_validation', 	'id_coach', 	'progression'


    ];
}
