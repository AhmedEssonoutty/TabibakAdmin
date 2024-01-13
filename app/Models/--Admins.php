<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
//use \Illuminate\Contracts\Auth\Access\Gate\Authorizable;
use App\Models\Roles;

class Admins extends Model
{
	use HasFactory;


	protected $table = "users";
	protected $guarded = [];
	public $timestamps = true;



	public function role(){
		/* return $this->belongsTo(Roles::class, 'user_role'); */
		$user = auth()->user();
		$perms = Roles::find($user->user_role);
		return $perms;
}


	public function hasAbility($permissions){
		$role = $this->role();
		if(!$role){
			return false;
		}
		foreach ($role->permissions as $permission){
			if (is_array($permissions) && in_array($permission, $permissions)){
				return true;
			}else if(is_string($permissions) && strcmp($permissions, $permission) == 0){
				return true;
			}
		}
		return false;
	}


	
	protected $fillable = [
		'name',
		'mobile',
		'birth_date',
		'username',
		'email',
		'password',
		'avatar',
		'job_title',
	];



	protected $hidden = [
		'password',
		'remember_token',
	];

}
