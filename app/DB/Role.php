<?php namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	/**
	 * users() one-to-many relationship method
	 *
	 * @return QueryBuilder
	 */
	public function users()
	{
		return $this->hasMany('App\DB\User\Users');
	}

	/** 
	 * permissions() many-to-many relationship method
	 *
	 * @return QueryBuilder
	 */
	public function permissions()
	{
		return $this->belongsToMany('App\DB\Permission');
	}
}