<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";
    protected $primaryKey = 'id_feedback';
    use HasFactory;

    public function movies(){
    	return $this->belongsTo('App\Models\Movie', 'id_movie');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users');
    }

    protected $guarded = ['id_feedback'];
}
