<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    protected $table = 'home_texts';
    
    // Karena primary key kita menggunakan string ID (bukan angka 1, 2, 3)
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'value'];
}