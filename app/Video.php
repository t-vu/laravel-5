<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model {
	protected $fillable = [ 
			"name",
			"category",
			"description",
			"published_at",
			"view" ,
			"user_id"
	];
	protected $dates = [ 
			"published_at" 
	];
	public function setPublishedAtAttribute($date) {
		$this->attributes ["published_at"] = Carbon::createFromFormat ( "Y-m-d", $date );
	}
	public function getViewAttribute($view) {
		return $view . " views";
	}
	public function scopePublished($query) {
		$query->where ( "published_at", "<=", Carbon::now () );
	}
	public function scopeUnpublished($query) {
		$query->where ( "published_at", ">", Carbon::now () );
	}
	
	public function user(){
		return $this->belongsTo("App\User");
	}
}
