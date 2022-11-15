<?php

namespace App\Http\Controllers;

use App\Models\P3;
use Illuminate\Http\Request;

class P3Controller extends Controller
{
    public function index()
    {

        return view('p3-3');

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
        $p2=new P3();
        if($req->file()) {
            $fileName = '_'.$req->file->getClientOriginalName();

            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            //$fileModel->id_user=Auth::id();
            $fileModel->nom_fichier = '_'.$req->file->getClientOriginalName();
            $fileModel->stockage = '/storage/' . $filePath;

            $fileModel->save();




            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }
}
