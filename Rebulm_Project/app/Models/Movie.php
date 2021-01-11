<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
    use HasFactory;
    public $timestamps = false;

    public function feedbacks(){ 
        return $this->hasMany('App\Models\Feedback'); 
    }

    protected $guarded = ['id_movie'];
}
