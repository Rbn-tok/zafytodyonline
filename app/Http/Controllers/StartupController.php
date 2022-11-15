<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Startup;

class StartupController extends Controller
{
    public function index()
    {

        return view('p1');

    }  
    public function postStartup(Request $request )
    {
        $request->validate([
            'nom' => 'required'
        ]);
        $data = $request->all();
        $id = $data['user_id'];
        $bla=User::where('id',$id)->first();
       $check = $this->create($data);
    }  
    public function create(array $data)

		{
		$id = $data['user_id'];
		$current_user=User::where('id',$id)->first();

		$odd = implode("|", $data['odd']);
		$fond = implode("|", $data['fond']);
		  return Startup::create([
			
			
		    'nom' => $data['nom'],
		    'id_user' => $id,
		    'site_web' => $data['site_web'],
		    'facebook' => $data['facebook'],
		    'statut_juridique' => $data['statut_juridique'],
		    'remuneration' => $data['remuneration'],
		    'fond' => $fond,
		    'date_creation' => $data['date_creation'],
		    'odd' => $odd,
		    'nom_ceo' =>  $current_user->name,
		    'age_ceo' =>  $current_user->age,
		    'contact_ceo' =>  $current_user->contact,
		    'email_ceo' =>  $current_user->email

		  ]);

		}
}
