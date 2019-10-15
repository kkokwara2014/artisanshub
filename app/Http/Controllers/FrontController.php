<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Skill;
use Auth;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $skills = Skill::orderBy('created_at', 'desc')->paginate(50);

        $comments = Comment::orderBy('created_at', 'desc')->get();
        
        
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        return view('frontend.index',compact('skills','categories','comments'))->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about()
    {
        $categories=Category::orderBy('name','asc')->get();
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        return view('frontend.about',compact('categories','comments'))->with($data);
    }
    
    public function contact()
    {
        $categories=Category::orderBy('name','asc')->get();
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        return view('frontend.contact',compact('categories','comments'))->with($data);
    }
   
    public function skillSingle($id)
    {
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        $categories=Category::orderBy('name','asc')->get();
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $skills=Skill::find($id);
        return view('frontend.skill',compact('categories','skills','comments'))->with($data);
    }
    public function showskillbycategory($id)
    {
        $data=array(
            'phone'=>'+ 234 813 888 3919',
            'email'=>'services@ekemarketonline.com',
            'address'=>'Amangbala Afikpo North Local Government Area'
        );
        $categories=Category::orderBy('name','asc')->get();
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $skills=Category::find($id)->skills;
        
        return view('frontend.skillsbycategory',compact('categories','skills','comments'))->with($data);
    }
    
    
}
