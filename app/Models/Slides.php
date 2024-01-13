<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
	use HasFactory;


	protected $fillable = [
		"slide_en_title",
		"slide_ar_title",
		"slide_en_excerpt",
		"slide_ar_excerpt",
		"image",
		"cta_target",
		"cta_clicks",
		"slider_id",
	];
}
