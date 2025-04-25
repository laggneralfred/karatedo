<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    
    protected $fillable = ['label', 'rank_order'];

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
