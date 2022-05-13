<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Tanaman;
use App\Models\Estetika;

class Arsitektural extends Model
{
    protected $table = "tb_arsitektural";

    public function atap()
    {
    	return $this->belongsToMany(Atap::class);
    }

    public function dinding()
    {
    	return $this->belongsToMany(Dinding::class);
    }

    public function tanaman()
    {
    	return $this->belongsToMany(Tanaman::class);
    }

    public function estetika()
    {
    	return $this->belongsToMany(Estetika::class);
    }
}
