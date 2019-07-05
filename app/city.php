<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table    = 'cities';
	protected $fillable = [
		'city_name_ar',
		'city_name_en',
		'country_id',
	];
	public function country_id() {
		return $this->hasOne('App\Country', 'id', 'country_id');
	}	
}
