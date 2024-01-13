<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteOptions;

class SiteOptionsController extends Controller
{
	public function GetSiteOptions(){
		$siteOptions = SiteOptions::select("option", "value")->get();
		$CollectedOptions = [];
		foreach ($siteOptions as $option){
		$CollectedOptions[$option->option] = $option->value;
		}
		return $CollectedOptions;
	}
	public function SiteIdentity($slug){
		$SiteOptions = (object) $this->GetSiteOptions();
		return view("Options.".$slug, ["SiteOptions" => $SiteOptions]);
	}


	public function UpdateOptions(Request $request){
		$testOp = [];
		$NewOptionAddedMsg = [];
		foreach($request->request as $option=>$value){
			$GetOptionRow = SiteOptions::select("id", "option", "value")->where("option" , "=", $option)->first();
			if ($GetOptionRow!=null){
				$GetCurOptionRow = SiteOptions::find($GetOptionRow->id);
				if($GetCurOptionRow["value"] == $request->$option){
					//
				}else{
					$GetCurOptionRow["value"] = $request->$option;
					if($GetCurOptionRow->update()){
						$NewOptionAddedMsg['Update'] = "There is a new option saved";
					}else{
						return response()->json(['code'=>0, 'msg'=>"Oops, Something went wrong while updating the new option"]);
					}
				}
				$testOp[$option] = $request->$option;
			}else{
				$NewOption = new SiteOptions([
					"option"	=> $option,
					"value"		=> $request->$option
				]);
				if($NewOption->save()){
					$NewOptionAddedMsg["Create"] = "There is a new option saved";
				}else{
					return response()->json(['code'=>0, 'msg'=>"Oops, Something went wrong while adding the new option"]);
				}
				$testOp[$option] = null;
			}
		}
		//$testOp = (object) $testOp;
		return redirect()->back()->with(['code'=>1, 'msg'=>"Site options has been saved successfully"]);
	}
}
