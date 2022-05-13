<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Arsitektural;
use App\Models\Estetika;
use App\Models\Relasi;



class Tanaman extends Model
{
    protected $table = "tb_tanaman";

    public function atap()
    {
    	return $this->belongsToMany(Atap::class);
    }

    public function dinding()
    {
    	return $this->belongsToMany(Dinding::class);
    }

    public function arsitektural()
    {
    	return $this->belongsToMany(Arsitektural::class);
    }

    public function estetika()
    {
    	return $this->belongsToMany(Estetika::class);
    }

    public function relasi()
    {
    	return $this->belongsTo(Relasi::class);
    }
}
