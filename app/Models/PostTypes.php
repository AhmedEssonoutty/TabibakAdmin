<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;


class PostTypes extends Model
{
	use HasFactory;

	protected $fillable = [
		"type_slug",
		"type_en_name",
		"type_ar_name"
	];

	public function Categories(){
		return $this->belongsTo(Categories::calss, "post_type");
	}
}
