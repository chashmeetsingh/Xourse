<?php

class Course extends \Eloquent {
	protected $fillable = [];

    public function videos() {
        return $this->hasMany('Video');
    }

    public function ratings() {
        return $this->hasMany('Rating');
    }
}