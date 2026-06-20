<?php

namespace App\Models;

use App\Models\Digimon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function digimons()
    {
        return $this->belongsToMany(Digimon::class);
    }
}
