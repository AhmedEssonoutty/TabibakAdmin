<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RolesRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
	public function index(){
		$users_roles = DB::table("roles")->paginate(5);
		/* $user = auth()->user();
		$Ability = Roles::find($user->user_role);
		dd($Ability->permissions); */
		return view("Users.Admins.Admins", ["roles"=>Roles::get(), "users"=> User::paginate(5)]);
	}


	public function UploadImage(Request $request){
		$randNo=rand(9999999,999999999);
		$curTimeStamp=time();
		$imageExt = $request->file->guessClientExtension();
		$imageName = $randNo.$curTimeStamp.'.'.$imageExt;
		$request->file->storeAs($request->filePath, $imageName, 'public');
		return response()->json(['code'=>1, 'msg'=>'Image uploaded succesully', 'fileName'=> $imageName]);
	}


	public function create(Request $request){
		$ValidationParameters = [
			"first_name"	=> "required|string",
			"last_name"	=> "required|string",
			"password"	=> [
				'required_with:confirm_password',
				'same:confirm_password',
				'string',
				'min:6',
			],
			"confirm_password"	=> [
				'required',
				'string',
			],
			"email"	=> [
				"required",
				"email",
				"unique:users"
			],
			"mobile"	=> [
				"required",
				"string",
				"unique:users"
			],
			"role"	=> "required|string",
			"avatar"	=> "required",
			"birth_date"	=> "required"
		];
		$ValidationRules = [
			'first_name.required'						=> "Please, Fill in first name first.",
			'last_name.required'    					=> "Sorry, Last name is required.",
			'password.required'			=> "Sorry, You can't ad users without password.",
			'password.same'			=> "Sorry, Confirm password doesn't match with password.",
			'password.min'			=> "Password must be at least 6 characters.",
			'email.email'			=> "Please, Enter a valid email account.",
			'email.unique'			=> "This email is unavailable, it may be registered before.",
			'mobile.required'			=> "Mobile is required.",
			'mobile.unique'			=> "This mobile number is unavailable, it may be registered before.",
			'role.required'			=> "User must have a role.",
			'avatar.required'			=> "User avatar is a required field.",
			'birth_date.required'			=> "Please, Fill in the birth date field.",
		];
		$validator = $this->validate($request, $ValidationParameters, $ValidationRules);
	try{
			$User = $this->process(new User, $request);
			if ($User){
				return redirect()->route("AdminUsers")->with("success", "Administrator has been added successfully");
			}else{
				return redirect()->route("AdminUsers")->with("error", "Oops!, Something went worng while creating new administrator");
			}
		} catch(\Exception $ex){
			return $ex;
			return redirect()->route("AdminUsers")->with("error", "Oops!, Something went worng while creating new administrator");
		}
	}


	public function edit($id){
		$user = User::findOrFail($id);
		return view("Users.Admins.Edit", ["roles"=>Roles::get(), "user"=> $user]);
	}


	public function update($id, Request $request){
		$ValidationParameters = [
			"first_name"	=> "required|string",
			"last_name"	=> "required|string",
			"password"	=> [
				'same:confirm_password',
				'string',
				'min:6',
			],
			"confirm_password"	=> [
				'required_if:password,' . $request->password,
				'string',
			],
			"email"	=> [
				"required",
				"email",
				"unique:users,email,".$id
			],
			"mobile"	=> [
				"required",
				"string",
				"unique:users,mobile,".$id
			],
			"role"	=> "required|string",
			"birth_date"	=> "required"
		];
		$ValidationRules = [
			'first_name.required'						=> "Please, Fill in first name first.",
			'last_name.required'    					=> "Sorry, Last name is required.",
			'password.required'			=> "Sorry, You can't ad users without password.",
			'password.same'			=> "Sorry, Confirm password doesn't match with password.",
			'password.min'			=> "Password must be at least 6 characters.",
			'email.email'			=> "Please, Enter a valid email account.",
			'email.unique'			=> "This email is unavailable, it may be registered before.",
			'mobile.required'			=> "Mobile is required.",
			'mobile.unique'			=> "This mobile number is unavailable, it may be registered before.",
			'role.required'			=> "User must have a role.",
			'birth_date.required'			=> "Please, Fill in the birth date field.",
		];
		$validator = $this->validate($request, $ValidationParameters, $ValidationRules);
		try{
			$User = User::findOrFail($id);
			$User = $this->process($User, $request);
			if ($User){
				return redirect()->route("AdminUsers")->with("success", "Administrator has been updated successfully");
			}else{
				return redirect()->route("AdminUsers")->with("error", "Oops!, Something went worng while creating new administrator");
			}
		} catch(\Exception $ex){
			return $ex;
			return redirect()->route("AdminUsers")->with("error", "Oops!, Something went worng while creating new administrator");
		}
	}


	public function destroy($id){
		User::where("id", "=", $id)->delete();
		return redirect()->route("AdminUsers")->with("success", "Your admin has been deleted successfully");
	}




	protected function process(User $user, Request $request){
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->mobile = $request->mobile;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->user_role = $request->role;
		$user->avatar = $request->avatar;
		$user->job_title = $request->job_title;
		$user->birth_date = $request->birth_date;
		$user->status = 1;
		$user->save();
		return $user;
	}
}
