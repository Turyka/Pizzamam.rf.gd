<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendelesek extends Model
{
    use HasFactory;
    protected $fillable = ['Ossz_darab','Pizza_darab_nev','Teljes_osszeg'];
    protected $table = 'rendelesek';
}