<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    protected $fillable = ['id','Titre','Contenue','Catégories','Lien','Images','Videos','Date'];
    protected $dates = ['created_at','updated_at'];
}
