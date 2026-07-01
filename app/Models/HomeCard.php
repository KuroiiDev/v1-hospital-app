<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCard extends Model
{
    protected $table = 'home_cards';
    protected $fillable = ['section', 'icon', 'title', 'text', 'sort_order'];
}