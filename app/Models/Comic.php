<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['cover_image','english_title','japanese_title','author','summary','release_date','price'];
}
