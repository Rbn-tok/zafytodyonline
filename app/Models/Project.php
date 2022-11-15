<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projet';
    use HasFactory;
    protected $fillable = [
	    'id_user',
	    'id_startup',
         	'nom',
            'probleme',
            'solution',
            'difference_concurrence',
            'date_creation'


    ];
}
