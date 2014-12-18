<?php

class Team extends Eloquent {
	public function team() {
		
		return $this->hasMany('Player');
	}
}