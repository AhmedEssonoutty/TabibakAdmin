<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Roles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
