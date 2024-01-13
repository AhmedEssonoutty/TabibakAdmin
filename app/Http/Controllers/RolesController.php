<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolesRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Roles;

class RolesController extends Controller
{
	public function index(){
		$users_roles = DB::table("roles")->paginate(5);
		//dd(getAllPermissions());
		return view("Users.Roles.UsersRoles", ["roles"=>Roles::simplePaginate(5)]);
	}


	
	public function SaveRole(RolesRequest $request){
		//return $request;
		try{
			$role = $this->process(new Roles, $request);
			if ($role){
				return redirect()->route("UserRoles")->with("success", "Your new role has been added successfully");
			}else{
				return redirect()->route("UserRoles")->with("error", "Oops!, Something went worng while creating new role");
			}
		} catch(\Exception $ex){
			return $ex;
			return redirect()->route("UserRoles")->with("error", "Oops!, Something went worng while creating new role");
		}
	}


	public function edit($id){
		$role = Roles::findOrFail($id);
		return view("Users.Roles.EditRoles", compact("role"));
	}


	public function update($id, RolesRequest $request){
		//return $request;
		try{
			$role = Roles::findOrFail($id);
			$role = $this->process($role, $request);
			if ($role){
				return redirect()->route("UserRoles")->with("success", "Your new role has been updated successfully");
			}else{
				return redirect()->route("UserRoles")->with("error", "Oops!, Something went worng while updating new role");
			}
		} catch(\Exception $ex){
			return $ex;
			return redirect()->route("UserRoles")->with("error", "Oops!, Something went worng while updating new role");
		}
	}


	public function DeleteRole(Request $request){
		Roles::where("id", "=", $request->id)->delete();
		return redirect()->route("UserRoles")->with("success", "Your new role has been deleted successfully");
	}


	protected function process(Roles $role, Request $request){
		$role->name = $request->name;
		$role->permissions = json_encode($request->permissions);
		$role->save();
		return $role;
	}
}
