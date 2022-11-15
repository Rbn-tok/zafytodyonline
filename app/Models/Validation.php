<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    
    protected $table = 'validation_project';
    protected $fillable = [
	    'id_projet',
         	'etat_validation',
            'date_envoie',
            'date_validation',
            'id_coach',
            'code_phase',
            'id_user',
            'texte',
            'id_file',
            

    ];

}
