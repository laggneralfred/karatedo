<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'sex', 'address_block',
        'phone', 'email', 'date_joined', 'photo_path'
    ];

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
