<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
	//relação n para n de produtos e compras
    public function products(){
    	return $this->belongsToMany('App\Product');
    }
}
