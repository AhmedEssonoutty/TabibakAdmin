<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
	use HasFactory;


	protected $fillable = [
		"slider_en_title",
		"slider_ar_title",
		"bg_image",
		"category",
	];
}
