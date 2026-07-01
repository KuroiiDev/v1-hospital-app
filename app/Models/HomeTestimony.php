<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeTestimony extends Model
{
    protected $table = 'home_testimonies';
    protected $fillable = ['image', 'name', 'title', 'text'];
}