<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    use HasFactory;

    protected $fillable = ['name', 'description', 'instruction'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
