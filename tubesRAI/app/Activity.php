<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
}

public function staff()
{
	return $this->belongsTo('App\Staff','nik')
}

public function presence(){
	return $this->hasMany('App\Presence','id_activity')
}