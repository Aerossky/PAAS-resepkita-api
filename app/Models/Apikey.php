<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apikey extends Model
{
    // fillable
    protected $fillable = ['api_key', 'user_id'];


    use HasFactory;
}
