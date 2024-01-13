<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	use HasFactory;


	protected $fillable = [
		"en_title",
		"ar_title",
		"en_excerpt",
		"ar_excerpt",
		"en_content",
		"ar_content",
		"image",
		"category",
		"post_type",
		"post_parent",
		"post_tags",
		"post_settings",
		"author",
		"status",
	];



	public function getPostTagsAttribute($post_tags){
		return json_decode($post_tags, true);
	}

}
