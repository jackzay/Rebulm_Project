<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";
    use HasFactory;

    public function movies(){
    	return $this->belongsTo('App\Models\Feedback');
    }

    protected $guarded = ['id_feedback'];
}
