<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signalements extends Model
{
    protected $fillable = ['id','Titre','Description','Status','Images','Videos','Date','AnonyUtilisateur'];
    protected $dates = ['created_at','updated_at'];
}
