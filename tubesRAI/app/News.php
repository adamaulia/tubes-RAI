<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
}

public function staff()
{
	return $this->belongsTo('App\Staff','nik')
}