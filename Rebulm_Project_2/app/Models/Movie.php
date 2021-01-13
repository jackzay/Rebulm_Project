<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
    protected $primaryKey = 'id_movie';
    use HasFactory;
    public $timestamps = false;

    public function feedbacks(){ 
        return $this->hasMany('App\Models\Feedback'); 
    }
    public function transactions(){ 
        return $this->hasMany('App\Models\Transaksi'); 
    }

    protected $guarded = ['id_movie'];
}
