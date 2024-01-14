<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "permissions"
    ];

    public function users(){
        $this->hasMany(User::class);
    }

    public function getPermissionsAttribute($permissions){
        return json_decode($permissions, true);
    }
}
