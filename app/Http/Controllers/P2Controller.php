<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\P2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class P2Controller extends Controller
{

    public function index()
    {

        return view('p2-2');

    }
    public function postP2(Request $req )
    {
        /*$request->validate([
            'nom' => 'required'
        ]);*/
        /*
        $data = $request->all();
        $id = $data['user_id'];

       $check = $this->create1($data);
       //$check = $this->create2($data);
       //$check = $this->create3($data);

       */

      $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new File();
        $p2=new P2();
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();

            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->id_user=Auth::id();
            $fileModel->nom_fichier = time().'_'.$req->file->getClientOriginalName();
            $fileModel->stockage = '/storage/' . $filePath;

            $fileModel->save();




            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }


    public function p2_1_view(){

        return view('p2-1-view');

    }

    public function comment(Request $request){
        $datas = $request->all();
/*
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
*/
        $cmt = $datas['commentaire'];

        //code phase
        $code_phase="p2-2";

        $commentaires=array("id_user"=>Auth::id(),"commentaire"=>$cmt,"code_phase"=>$code_phase);
        DB::table('commentaire')->insert($commentaires);
        return back();
    }
}
