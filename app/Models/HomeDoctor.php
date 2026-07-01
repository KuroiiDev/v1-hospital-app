<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeDoctor extends Model
{
    protected $table = 'home_doctors';
    protected $fillable = ['image', 'name', 'title', 'text', 'twitter', 'fb', 'linkedin', 'sort_order'];
}