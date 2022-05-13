<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tanaman;
use App\Models\Dinding;
use App\Models\Arsitektural;
use App\Models\Estetika;

class Atap extends Model
{
    protected $table = "tb_atap";

    public function tanaman()
    {
    	return $this->belongsToMany(Tanaman::class);
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
}
