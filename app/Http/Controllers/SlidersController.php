<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Slides;
use App\Models\Categories;



class SlidersController extends Controller
{
	public function CreateSlider(){
		$SlidesCount = [];
		$Slider = Sliders::orderBy("id", "DESC")->paginate(10);
		$AllSliders = Sliders::orderBy("id", "DESC")->get();
		$Categories = Categories::where("post_type", "=", "sliders")->get();
		foreach($AllSliders as $Row){
			$SlidesCount[$Row->id] = Slides::where('slider_id', '=', $Row->id)->count();
		}
		return view("Posts.Sliders.Sliders", ["Sliders"=> $Slider, "Categories"=>$Categories, "SlidesCounter"=> $SlidesCount]);
	}





	public function StoreSlider(Request $request){
		$ValidationRules = [
			"slider_en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:sliders'
			],
			"slider_ar_title"	=> [
				"required",
				'unique:sliders'
			],
			"category"=>"numeric|min:1"
		];
		$ValidationParameters = [
			"category.min" => "Please select slider category",
			"slider_ar_title.required" => "Arabic slider title is required field",
			"slider_en_title.required" => "English slider title is required field",
			"slider_en_title.regex" => "Only numbers and latin characters are allowed",
			"slider_en_title.unique" => "This name is seemed to be used before",
			"slider_ar_title.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$Slider = new Sliders([
			'slider_en_title' => $request->slider_en_title,
			'slider_ar_title' => $request->slider_ar_title,
			'category' => $request->category,
			'bg_image' => $request->bg_image,
		]);
		if($Slider->save()){
			return redirect()->route("EditSlider", $Slider->id)->with(['code'=>1, 'success'=>"Slider has been saved successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while creating slider"]);
		}
	}





	public function EditSlider($id){
		$Slider = Sliders::find($id);
		$Slides = Slides::where("slider_id", "=", $Slider->id)->paginate(10);
		$Slider->SlidsCount = $Slides->count();
		$Categories = Categories::where("post_type", "=", "sliders")->get();
		return view("Posts.Sliders.Edit", ["Slider"=> $Slider, "Categories"=>$Categories, "Slides"=>$Slides]);
	}





	public function UpdateSlider(Request $request){
		$ValidationRules = [
			"slider_en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:sliders,slider_en_title,'.$request->SliderID,
			],
			"slider_ar_title"	=> [
				"required",
				'unique:sliders,slider_ar_title,'.$request->SliderID,
			],
			"category"=>"numeric|min:1"
		];
		$ValidationParameters = [
			"category.min" => "Please select slider category",
			"slider_ar_title.required" => "Arabic slider title is required field",
			"slider_en_title.required" => "English slider title is required field",
			"slider_en_title.regex" => "Only numbers and latin characters are allowed",
			"slider_en_title.unique" => "This name is seemed to be used before",
			"slider_ar_title.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$Slider = Sliders::find($request->SliderID);
		$Slider["slider_en_title"] = $request->slider_en_title;
		$Slider["slider_ar_title"] = $request->slider_ar_title;
		$Slider["bg_image"] = $request->bg_image;
		$Slider["category"] = $request->category;
		if($Slider->update()){
			return redirect()->route("EditSlider", $Slider->id)->with(['code'=>1, 'success'=>"Slider has been updated successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while updating slider"]);
		}
	}





	public function DeleteSlider($id){
		Sliders::where("id", "=", $id)->delete();
		return redirect()->route("CreateSlider")->with("success", "Slider has been deleted successfully");
	}





	public function StoreSlide(Request $request){
		$ValidationRules = [
			"slide_en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:slides'
			],
			"slide_ar_title"	=> [
				"required",
				'unique:slides'
			],
			"image"=>"required"
		];
		$ValidationParameters = [
			"image.required" => "Please select slider image",
			"slide_ar_title.required" => "Arabic slide title is required field",
			"slide_en_title.required" => "English slide title is required field",
			"slide_en_title.regex" => "Only numbers and latin characters are allowed",
			"slide_en_title.unique" => "This name is seemed to be used before",
			"slide_ar_title.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		//return $request;
		$Slider = new Slides([
			'slide_en_title' => $request->slide_en_title,
			'slide_ar_title' => $request->slide_ar_title,
			'slide_en_excerpt' => $request->slide_en_excerpt,
			'slide_ar_excerpt' => $request->slide_ar_excerpt,
			'image' => $request->image,
			'bg_image' => $request->bg_image,
			'cta_target' => $request->cta_target,
			'slider_id' => $request->slider_id,
		]);
		if($Slider->save()){
			return redirect()->route("EditSlider", $request->slider_id)->with(['code'=>1, 'success'=>"Slide has been saved successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while creating slide"]);
		}
	}





	public function GetSlideData($id){
		$SlideData = Slides::find($id);
		return $SlideData;
	}





	public function EditSlide($id){
		//
	}





	public function UpdateSlide(Request $request){
		$ValidationRules = [
			"slide_en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:slides,slide_en_title,'.$request->slide_id
			],
			"slide_ar_title"	=> [
				"required",
				'unique:slides,slide_ar_title,'.$request->slide_id
			],
			"image"=>"required"
		];
		$ValidationParameters = [
			"image.required" => "Please select slider image",
			"slide_ar_title.required" => "Arabic slide title is required field",
			"slide_en_title.required" => "English slide title is required field",
			"slide_en_title.regex" => "Only numbers and latin characters are allowed",
			"slide_en_title.unique" => "This name is seemed to be used before",
			"slide_ar_title.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$Slide = Slides::find($request->slide_id);
		$Slide["slide_en_title"] = $request->slide_en_title;
		$Slide["slide_ar_title"] = $request->slide_ar_title;
		$Slide["slide_en_excerpt"] = $request->slide_en_excerpt;
		$Slide["slide_ar_excerpt"] = $request->slide_ar_excerpt;
		$Slide["image"] = $request->image;
		$Slide["cta_target"] = $request->cta_target;
		if($Slide->update()){
			return redirect()->route("EditSlider", $request->slider_id)->with(['code'=>1, 'success'=>"Slide has been updated successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while updating slide"]);
		}
	}





	public function DeleteSlide($id){
		Slides::where("id", "=", $id)->delete();
		return redirect()->back()->with("success", "Slide has been deleted successfully");
	}
}
