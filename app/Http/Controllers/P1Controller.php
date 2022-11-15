<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\P1;
use App\Models\Validation;

class P1Controller extends Controller
{
    public function index()
    {

        return view('p2-1');

    }  
    public function postP1(Request $request )
    {
        /*$request->validate([
            'nom' => 'required'
        ]);*/
        $data = $request->all();
        $id = $data['user_id'];
        
       $check = $this->create1($data);
       //$check = $this->create2($data);
       //$check = $this->create3($data);
    }  
    public function create1(array $data)

		{
		$id = $data['user_id'];
		$current_user=User::where('id',$id)->first();
		$current_user->id_project;
		$current_user->id_startup;
		  return P1::create([
			
			
		    'texte' => $data['p2-1-1'],
		    'texte' => $data['p2-1-2'],
		    'texte' => $data['p2-1-3'],
		    'id_user' => $id,
		    'id_projet' => $current_user->id_project,
		    'id_startup' => $current_user->id_startup,

		  ]);

		}
		/*public function create2(array $data)

		{
		$id = $data['user_id'];
		$current_user=User::where('id',$id)->first();
		$current_user->id_project;
		$current_user->id_startup;
		  return Startup::create([
			
			
		    'nom' => $data['p2-1'],
		    'nom' => $data['p2-2'],
		    'nom' => $data['p2-3'],
		    'id_user' => $id,

		  ]);

		}

		public function create3(array $data)

		{
		$id = $data['user_id'];
		$current_user=User::where('id',$id)->first();
		$current_user->id_project;
		$current_user->id_startup;
		  return Startup::create([
			
			
		    'nom' => $data['p2-1'],
		    'nom' => $data['p2-2'],
		    'nom' => $data['p2-3'],
		    'id_user' => $id,

		  ]);

		}*/
}
