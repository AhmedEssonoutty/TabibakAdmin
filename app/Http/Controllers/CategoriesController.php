<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;
use App\Models\PostTypes;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
	public function CreatePostType(){
		$PostTypes = PostTypes::paginate(10);
		$mySlug = Str::slug('It Solutions provide laravel examples');
		return view("Posts.Categories.PostTypes", ["PostTypes"=>$PostTypes]);
	}





	public function StorePostType(Request $request){
		$ValidationRules = [
			"type_en_name"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:post_types'
			],
			"type_ar_name"	=> [
				"required",
				'unique:post_types'
			],
		];
		$ValidationParameters = [
			"type_ar_name.required" => "Arabic post type name is required field",
			"type_en_name.required" => "English post type name is required field",
			"type_en_name.regex" => "Only numbers and latin characters are allowed",
			"type_en_name.unique" => "This name is seemed to be used before",
			"type_ar_name.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$PostType = new PostTypes([
			'type_slug' => STR::slug($request->type_en_name),
			'type_en_name' => $request->type_en_name,
			'type_ar_name' => $request->type_ar_name,
		]);
		if($PostType->save()){
			return redirect()->back()->with(['code'=>1, 'success'=>"Post type has been saved successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while creating post type"]);
		}
	}




	public function EditPostType($id){
		$PostType = PostTypes::find($id);
		return view("Posts.Categories.Edit", ["PostType"=>$PostType]);
	}





	public function UpdatePostType(Request $request){
		$ValidationRules = [
			"type_en_name"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:post_types,type_en_name,'.$request->TypeID
			],
			"type_ar_name"	=> [
				"required",
				'unique:post_types,type_ar_name,'.$request->TypeID
			],
		];
		$ValidationParameters = [
			"type_ar_name.required" => "Arabic post type name is required field",
			"type_en_name.required" => "English post type name is required field",
			"type_en_name.regex" => "Only numbers and latin characters are allowed",
			"type_en_name.unique" => "This name is seemed to be used before",
			"type_ar_name.unique" => "This name is seemed to be used before",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$PostType = PostTypes::find($request->TypeID);
		$PostType['type_slug'] = STR::slug($request->type_en_name);
		$PostType['type_en_name'] = $request->type_en_name;
		$PostType['type_ar_name'] = $request->type_ar_name;
		if($PostType->update()){
			return redirect()->route("CreatePostType")->with(['code'=>1, 'msg'=>"Post type has been updated successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'msg'=>"Oops, Something went wrong while updating post type"]);
		}
	}




	public function DeletePostType($id){
		PostTypes::where("id", "=", $id)->delete();
		return redirect()->route("CreatePostType")->with("success", "Post type has been deleted successfully");
	}




	public function CreateCategory(){
		$PostTypes = PostTypes::all();
		$ParentCategories = Categories::where("cat_parent", "=", 0)->get();
		$Categories = Categories::paginate(10);
		return view("Posts.Categories.Categories", ["ParentCategories"=> $ParentCategories, "Categories"=> $Categories, "PostTypes"=>$PostTypes]);
	}





	public function StoreCategory(Request $request){
		$ValidationRules = [
			"category_en_name"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:categories'
			],
			"category_ar_name"	=> [
				"required",
				'unique:categories'
			],
			"post_type"	=> "required",
		];
		$ValidationParameters = [
			"post_type.required" => "Please select at least one post type.",
			"category_ar_name.required" => "Arabic post category name is required field.",
			"category_en_name.required" => "English post category name is required field.",
			"category_en_name.regex" => "Only numbers and latin characters are allowed.",
			"category_en_name.unique" => "This name is seemed to be used before.",
			"category_ar_name.unique" => "This name is seemed to be used before.",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$Category = new Categories([
			'category_en_name' => $request->category_en_name,
			'category_ar_name' => $request->category_ar_name,
			'post_type' => $request->post_type,
			'cat_parent' => $request->cat_parent,
			'cat_image' => $request->cat_image,
		]);
		if($Category->save()){
			return redirect()->back()->with(['code'=>1, 'success'=>"Post type has been saved successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while creating post type"]);
		}
	}





	public function EditCategory($id){
		$PostTypes = PostTypes::all();
		$ParentCategories = Categories::where("cat_parent", "=", 0)->get();
		$Categories = Categories::paginate(10);
		$Category = Categories::find($id);
		return view("Posts.Categories.EditCategory", ["ParentCategories"=> $ParentCategories, "Categories"=> $Categories, "CurCategory"=> $Category, "PostTypes"=>$PostTypes]);
	}





	public function UpdateCategory(Request $request){
		$ValidationRules = [
			"category_en_name"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
				'unique:categories,category_en_name,'.$request->CategoryID
			],
			"category_ar_name"	=> [
				"required",
				'unique:categories,category_ar_name,'.$request->CategoryID
			],
			"post_type"	=> "required",
		];
		$ValidationParameters = [
			"post_type.required" => "Please select at least one post type.",
			"category_ar_name.required" => "Arabic post category name is required field.",
			"category_en_name.required" => "English post category name is required field.",
			"category_en_name.regex" => "Only numbers and latin characters are allowed.",
			"category_en_name.unique" => "This name is seemed to be used before.",
			"category_ar_name.unique" => "This name is seemed to be used before.",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$Category = Categories::find($request->CategoryID);
		$Category['category_en_name']	=	$request->category_en_name;
		$Category['category_ar_name']	=	$request->category_ar_name;
		$Category['post_type']	=	$request->post_type;
		$Category['cat_parent']	=	$request->cat_parent;
		$Category['cat_image']	=	$request->cat_image;
		if($Category->update()){
			return redirect()->route("CreateCategory")->with(['code'=>1, 'success'=>"Category has been updated successfully"]);
		}else{
			return redirect()->route("CreateCategory")->with(['code'=>0, 'error'=>"Oops, Something went wrong while updating category"]);
		}
	}





	public function DeleteCategory($id){
		Categories::where("id", "=", $id)->delete();
		return redirect()->route("UserRoles")->with("success", "Your new role has been deleted successfully");
	}






}
