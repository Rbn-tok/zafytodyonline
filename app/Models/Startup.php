<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    
    protected $table = 'startup';
    use HasFactory;
    protected $fillable = [
	    'id_user',
         	'nom',
            'nom_ceo',
            'age_ceo',
            'email_ceo',
            'contact_ceo',
            'site_web',
            'facebook',
            'statut_juridique',
            'remuneration',
            'fond',
            'odd',
            'date_creation'


    ];

}
