<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Startup;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {

        return view('projet');

    }  
    public function postProjet(Request $request )
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

		  return Project::create([
			
			
		    'nom' => $data['nom'],
		    'id_user' => $id,
		    'id_startup' => '3',
		    'probleme' => $data['probleme'],
		    'solution' => $data['solution'],
		    'difference_concurrence' => $data['difference_concurrence'],
		    'date_creation' => $data['date_creation']

		  ]);

		}
}
