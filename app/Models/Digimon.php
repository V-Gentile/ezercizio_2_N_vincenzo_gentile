<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digimon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'level', 'type', 'img', 'user_id'
    ];

    public function user()
    { 
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    } 
}
