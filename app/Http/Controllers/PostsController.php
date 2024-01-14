<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\PostTypes;
use App\Models\Posts;
use Illuminate\Support\Str;


class PostsController extends Controller
{
	public function CreatePost(){
		$Posts = Posts::where([["post_parent", "=", "0"], ["post_type", "!=", "pages"]])->paginate(10);
		$ParentPosts = Posts::where([["post_parent", "=", "0"], ["post_type", "!=", "pages"]])->limit(100)->orderBy("id", "DESC")->get();
		$ChildrenPosts = Posts::where("post_parent", "!=", "0")->orderBy("id", "DESC")->get();
		$Categories = Categories::where("post_type", "=", "posts")->get();
		return view("Posts.Posts.Posts", ["ParentPosts"=>$ParentPosts, "Posts"=>$Posts, "ChildrenPosts"=>$ChildrenPosts, "Categories"=>$Categories]);
	}





	public function StorePost(Request $request){
		$ValidationRules = [
			"en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
			],
			"ar_title"	=> [
				"required",
			],
				"en_excerpt"	=> [
				'regex:/(^[A-Za-z0-9 ]+$)+/',
			],
			"category"	=> "required",
		];
		$ValidationParameters = [
			"category.required" => "Please select post category.",
			"ar_title.required" => "Arabic post title is required field.",
			"en_title.required" => "English post post title is required field.",
			"en_title.regex" => "Only numbers and latin characters are allowed.",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$SelectedCategory = Categories::find($request->category);
		$PostTagsArray= explode(",", $request->post_tags);
		$NewPost = new Posts([
			'en_title'	=> $request->en_title,
			'ar_title'		=> $request->ar_title,
			'en_excerpt'	=> $request->en_excerpt,
			'ar_excerpt'	=> $request->ar_excerpt,
			'en_content'	=> $request->en_content,
			'ar_content'	=> $request->ar_content,
			'image'				=> $request->image,
			'category'		=> $request->category,
			'post_type'		=> $SelectedCategory->post_type,
			'post_parent'	=> $request->post_parent,
			'post_tags'		=> json_encode($PostTagsArray),
			'author'			=> auth()->user()->id,
			'status'			=> $request->status,
		]);
		/* return $NewPost; */
		if($NewPost->save()){
			return redirect()->back()->with(['code'=>1, 'success'=>"Post has been saved successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while creating post."]);
		}
	}

	




	public function EditPost($id){
		$Post = Posts::find($id);
		$ParentPosts = Posts::where([["post_parent", "=", "0"], ["id", "!=", $id]])->limit(100)->orderBy("id", "DESC")->get();
		$Categories = Categories::where("post_type", "=", "posts")->get();
		return view("Posts.Posts.EditPost", ["ParentPosts"=>$ParentPosts, "Post"=>$Post, "Categories"=>$Categories]);
	}






	public function UpdatePost(Request $request){
		$ValidationRules = [
			"en_title"	=> [
				'required',
				'regex:/(^[A-Za-z0-9 ]+$)+/',
			],
			"ar_title"	=> [
				"required",
			],
				"en_excerpt"	=> [
				'regex:/(^[A-Za-z0-9 ]+$)+/',
			],
			"category"	=> "required",
		];
		$ValidationParameters = [
			"category.required" => "Please select post category.",
			"ar_title.required" => "Arabic post title is required field.",
			"en_title.required" => "English post post title is required field.",
			"en_title.regex" => "Only numbers and latin characters are allowed.",
		];
		$validator = $this->validate($request, $ValidationRules, $ValidationParameters);
		$PostTagsArray= explode(",", $request->post_tags);
		$SelectedCategory = Categories::find($request->category);
		$CurPost = Posts::find($request->post_id);
		$CurPost['en_title'] = $request->en_title;
		$CurPost['ar_title'] = $request->ar_title;
		$CurPost['en_excerpt'] = $request->en_excerpt;
		$CurPost['ar_excerpt'] = $request->ar_excerpt;
		$CurPost['en_content'] = $request->en_content;
		$CurPost['ar_content'] = $request->ar_content;
		$CurPost['image'] = $request->image;
		$CurPost['category'] = $request->category;
		$CurPost['post_type'] = $SelectedCategory->post_type;
		$CurPost['post_parent'] = $request->post_parent;
		$CurPost['post_tags'] = json_encode($PostTagsArray);
		$CurPost['status'] = $request->status;
		/* return $CurPost; */
		if($CurPost->update()){
			return redirect()->back()->with(['code'=>1, 'success'=>"Post has been updated successfully"]);
		}else{
			return redirect()->back()->with(['code'=>0, 'error'=>"Oops, Something went wrong while updating post."]);
		}
		//dd(json_encode(explode(",", $request->post_tags)));
	}






	public function DeletePost($id){
		$PostChildren = Posts::where("post_parent", "=", $id)->delete();
		Posts::where("id", "=", $id)->delete();
		return redirect()->route("CreatePost")->with("success", "Post has been deleted successfully");
	}






	public function CreatePage(){
		$Posts = Posts::where([["post_parent", "=", "0"], ["post_type", "=", "pages"]])->paginate(10);
		$ParentPosts = Posts::where([["post_parent", "=", "0"], ["post_type", "=", "pages"]])->limit(100)->orderBy("id", "DESC")->get();
		$ChildrenPosts = Posts::where("post_parent", "!=", "0")->orderBy("id", "DESC")->get();
		$Category = Categories::where("post_type", "=", "pages")->first();
		return view("Posts.Pages.Pages", ["ParentPosts"=>$ParentPosts, "Posts"=>$Posts, "ChildrenPosts"=>$ChildrenPosts, "Category"=>$Category]);
	}

	




	public function EditPage($id){
		$Post = Posts::find($id);
		$ParentPosts = Posts::where([["post_parent", "=", "0"], ["id", "!=", $id]])->limit(100)->orderBy("id", "DESC")->get();
		$Category = Categories::where("post_type", "=", "pages")->first();
		return view("Posts.Pages.EditPage", ["ParentPosts"=>$ParentPosts, "Post"=>$Post, "Category"=>$Category]);
	}







}
