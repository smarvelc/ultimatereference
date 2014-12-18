<?php

class Player extends Eloquent {
	public function player() {
		
		return $this->belongsTo('Team');
	}
}