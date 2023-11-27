<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function vratAutory(){

        $autori = Author::all();
        //$autori = DB::table('autors')->get();
        //dd($autori);

        return View("autori", ["autors" => $autori]);
    }

    public function delete(int $id){

        //Author::where("id", $id)->delete();

        $autor=Author::find($id);
        $autor->delete();

        return back();
        //DB::table("autors")->where("id", $id)->delete();


        dd("Autor minus ". $id);
    }

    public function pridatAutora(Request $request){
        $jmeno = $request->input("jmeno");
        $prijmeni = $request->input("příjmení");

        $autor = new Author([
           "prijmeni" => $prijmeni,
           "jmeno" => $jmeno
        ]);
        //$autor->jmeno = $jmeno;
        //$autor->prijmeni = $prijmeni;
        $autor->save();

        return back()->with("msg", "autor plus");

    }
};
