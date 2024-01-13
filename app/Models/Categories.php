<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostTypes;


class Categories extends Model
{
	use HasFactory;
	protected $fillable = [
		"category_en_name",
		"category_ar_name",
		"post_type",
		"cat_parent",
		"cat_image"
	];



	public function PostTypes(){
		return $$this->hasMany(PostTypes::class, "post_type");
	}
}
