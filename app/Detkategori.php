<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detkategori extends Model
{
    public function Barang(){
    return $this->belongsTo('App\Barang');
    }

    public function Kategori(){
    return $this->belongsTo('App\Kategori');
    }
}
