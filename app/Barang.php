<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function Detkategori(){
    	return $this->hasMany('App\Detkategori', 'barang_id');
	}

	 public function Detgambar(){
    	return $this->hasMany('App\Detgambar', 'barang_id');
	}	
}
