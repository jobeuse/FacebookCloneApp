<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function search()
    {

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
        $posts=request()->validate([
            'body'=>'max:255',
            'image' => '|file|mimes:jpeg,png,jpg,svg',
            'caption'=>'max:200',
            'video'=> '|file|mimes:gif,mp4,MP4,M4V,MP4V,3G2,3GP2,3GP,3GPP,MOV,AVI,MP3',
            ]);

            $bodynormal=$request->input('bodynormal');
            $Templatepost=$request->input('bodytemplate');

 

            if ($Templatepost==null) {
                $post= new Posts();
                $post->user_id=auth()->user()->id;
                $post->body=$request->input('bodynormal');
                $post->cat='normal';
                $post->save();
                return back()->with('success','Post Added');
                
            }elseif ($bodynormal ==null) {

                $post= new Posts();
                $post->user_id=auth()->user()->id;
                $post->body=$request->input('bodytemplate');
                $post->cat='template';
                $post->save();
                return back()->with('success','Post Added');
            } 
     

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function fileupload(Request $request, Posts $posts)
    {
           $posts=request()->validate([ 
            'image' => '|file|mimes:jpeg,png,jpg,svg',
            'caption'=>'max:200',
            'video'=> '|file|mimes:gif,mp4,MP4,M4V,MP4V,3G2,3GP2,3GP,3GPP,MOV,AVI,MP3',
            ]);


          if($request->file('image') != null){
            $image = $request->file('image'); 
            $destinationPath = $request->file('image')->store('images');

            $post= new Posts();
            $post->user_id=auth()->user()->id;
            $post->caption=$request->input('caption');
            $post->image= $image->move($destinationPath);
            $post->save();
            return back()->with('success','image Added');
        }
        else{
            return back()->with('error','samething went wrong');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
