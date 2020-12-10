<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function Detkategori(){
    	return $this->hasMany('App\Detkategori', 'kategori_id');
	}
}
