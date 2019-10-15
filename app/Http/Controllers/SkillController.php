<?php

namespace App\Http\Controllers;

use App\Category;
use App\Skill;
use Illuminate\Http\Request;

use Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $skills = Skill::orderBy('created_at', 'desc')->get();
        return view('admin.skill.index', array('user' => Auth::user()), compact('skills', 'categories'));
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
        $this->validate($request, [
            'businessname' => 'required|string',
            'businessaddress' => 'required|string',
            'city' => 'required|string',
            'category_id' => 'required',
        ]);

        // Skill::create($request->all());

        $skill = new Skill;
        $skill->businessname = $request->businessname;
        $skill->businessaddress = $request->businessaddress;
        $skill->city = $request->city;
        $skill->user_id = $request->user_id;
        $skill->category_id = $request->category_id;
        $skill->save();

        return back();
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
        $categories = Category::orderBy('name', 'asc')->get();
        $skills = Skill::where('id', $id)->first();;
        return view('admin.skill.edit', array('user' => Auth::user()), compact('skills','categories'));
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
        $this->validate($request, [
            'businessname' => 'required|string',
            'businessaddress' => 'required|string',
            'city' => 'required|string',
            'category_id' => 'required',
        ]);

        // Skill::create($request->all());

        $skill = Skill::find($id);
        $skill->businessname = $request->businessname;
        $skill->businessaddress = $request->businessaddress;
        $skill->city = $request->city;
        $skill->user_id = $request->user_id;
        $skill->category_id = $request->category_id;
        $skill->save();

        return redirect(route('skill.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills=Skill::where('id',$id)->delete();

        return redirect()->back();
    }
}
