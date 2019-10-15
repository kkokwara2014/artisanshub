<?php

namespace App\Http\Controllers;

use App\Category;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchskill(Request $request)
    {
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        $categories=Category::orderBy('name','asc')->get();
        // $users=User::orderBy('lastname','asc')->get();

        $skillname = $request->skillname;

        if ($skillname != "") {
            $skill = Skill::where('businessname', 'LIKE', '%' . $skillname . '%')->orWhere('businessaddress', 'LIKE', '%' . $skillname . '%')->orWhere('city', 'LIKE', '%' . $skillname . '%')->get();
            if (count($skill)>0) {
               return view('frontend.skillsearch',compact('categories'))->withDetails($skill)->withQuery($skillname)->with($data);
            }
        }

        return view('frontend.skillsearch',compact('categories'))->withMessage('No Artisan has registered in this Location!')->with($data);
    }
}
