<?php

namespace App\Http\Controllers;

use App\forum;
use Illuminate\Http\Request;
use auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('home' );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('forum.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $forums = new forum;
        $forums->user_id = Auth::user()->id;
        $forums->title = $request ->title;
        $forums->slug = str_slug($request->title);
        $forums->description = $request->description;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $forums->image = $filename;
        }

       $forums->save();

        return back();
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = forum::find($id);
        return view('forum.edit',compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $forums = Forum::find($id);
            $forums->user_id = Auth::user()->id;
            $forums->title = $request ->title;
            $forums->slug = str_slug($request->title);
            $forums->description = $request->description;
            if ($request->file('image')){
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $location = public_path('/images');
                $file->move($location, $filename);

                $oldimage = $forums -> image;
                \Storage::delete($oldimage);

                $forums->image = $filename;
            }
    
           $forums->save();
    
            return back();
         }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(forum $forum)
    {
        //
    }
}
