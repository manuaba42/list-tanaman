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

        $newData = [];
        $input = $request->all();

        // dd($input);
        
        if(!empty($input['arsitektural'])){
            $datas[] = Relasi::join('tb_tanaman', 'tb_tanaman.id', '=', 'tb_relasi.id_tanaman')
                    ->whereIn('id_arsitektural', $input['arsitektural'])->get('tb_tanaman.nama');
        }
        if(!empty($input['atap'])){
            $datas[] = Relasi::join('tb_tanaman', 'tb_tanaman.id', '=', 'tb_relasi.id_tanaman')
                    ->whereIn('tb_relasi.id_atap', $input['atap'])->get('tb_tanaman.nama');
        }
        if(!empty($input['dinding'])){
            $datas[] = Relasi::join('tb_tanaman', 'tb_tanaman.id', '=', 'tb_relasi.id_tanaman')
                    ->whereIn('id_dinding', $input['dinding'])->get('tb_tanaman.nama');
        }
        if(!empty($input['estetika'])){
            $datas[] = Relasi::join('tb_tanaman', 'tb_tanaman.id', '=', 'tb_relasi.id_tanaman')
                    ->whereIn('id_estetika', $input['estetika'])->get('tb_tanaman.nama');
        }

        if(!empty($datas)){
            foreach($datas as $data){
                if(!empty($data[0])){
                    $newData[] = $data;
                }
            }
        }

        return view('tanaman', compact('newData'));
    }

}
