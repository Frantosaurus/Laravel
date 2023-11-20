<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function vratAutory(){
        $autori = DB::table('autors')->get();
        //dd($autori);

        return View("autori", ["autors" => $autori]);
    }

    public function delete(int $id){
        DB::table("autors")->where("id", $id)->delete();
        dd("Autor minus ". $id);
    }
};
