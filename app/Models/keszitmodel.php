<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keszitmodel extends Model
{
    use HasFactory;
    
    protected $fillable = ['darabszam','cim','ar','logo','osszetevok'];
    protected $hidden = [
      'cim',
        'id', 
        'ar',
        'darabszam',
    ];
    protected $table='listings';

    public function scopeFilter($query, array $filters)
    {
      
      if($filters['search'] ?? false)
      {
        $query->where('cim', 'like' ,'%' . request('search').'%')
        ->orWhere('osszetevok', 'like' ,'%' . request('search').'%');
      }
    }  
}