<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atap;
use App\Models\Tanaman;
use App\Models\Arsitektural;
use App\Models\Estetika;


class Dinding extends Model
{
    protected $table = "tb_dinding";

    public function atap()
    {
    	return $this->belongsToMany(Atap::class);
    }

    public function tanaman()
    {
    	return $this->belongsToMany(Tanaman::class);
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
