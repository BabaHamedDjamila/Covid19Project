<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idees extends Model
{
    protected $fillable = ['id','Titre','Contenue','Status','Images','Videos','Votes','Date'];
    protected $dates = ['created_at','updated_at'];

}
