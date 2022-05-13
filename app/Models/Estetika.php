<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Arsitektural;
use App\Models\Tanaman;

class Estetika extends Model
{
    protected $table = "tb_estetika";

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

    public function dinding()
    {
    	return $this->belongsToMany(Dinding::class);
    }
}
