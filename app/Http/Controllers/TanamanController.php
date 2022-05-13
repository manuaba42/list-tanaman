<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Tanaman;
use App\Models\Estetika;
use App\Models\Arsitektural;
use App\Models\Relasi;
use Illuminate\Support\Facades\DB;

class TanamanController extends Controller
{
    public function index()
    {
    	$tanaman = Tanaman::get();
    	return view('tanaman', ['tanaman' => $tanaman]);
    }

    public function show()
    {
    	$ataps = Atap::get();
        $dindings = Dinding::get();
        $estetikas = Estetika::get();
        // $arsitekturals = Arsitektural::get();

    	return view('index', ['ataps' => $ataps, 'dindings' => $dindings, 'estetikas' => $estetikas]);
    }


    public function tanaman(Request $request){

        $terms = $request->all();
        
        $users[] = DB::table('tb_relasi')->whereIn('id_atap', $terms['atap']),
                    o->get();

        // $users[] = DB::table('tb_relasi')->whereIn('id_dinding', $terms['dinding'])->get();
        // $users[] = DB::table('tb_relasi')->whereIn('id_estetika', $terms['estetika'])->get();
       
        // $users[] =  (array) $users;
        // dd($arrays);
        
        return view('tanaman', compact('users'));
    }

}
