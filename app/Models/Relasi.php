<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Arsitektural;
use App\Models\Tanaman;
use App\Models\Estetika;

class Relasi extends Model
{
    protected $table = "tb_relasi";

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

    public function tanaman()
    {
    	return $this->hasMany(Tanaman::class);
    }
}
