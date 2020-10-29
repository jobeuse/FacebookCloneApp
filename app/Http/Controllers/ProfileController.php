<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Http\redirect;
use App\Posts;

class ProfileController extends Controller
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



    
    public function index()
    {
        //
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
    public function storefriends(User $user, Request $request)
    {
           if (
            auth()
                ->user()
                    ->following($user))
                    {
                        auth()
                        ->user()
                            ->unfollow($user);


        }
        else{

            auth()
                ->user()
                    ->follow($user);
 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    { 
        $user_id=auth()->user()->id;
        $Postscount = Posts::where('user_id', $user_id)->count();
        $Posts= Posts::where('user_id', $user_id);
        $following=auth()->user()->followinglist($user);
        $follower=auth()->user()->follower($user)->count();
        $BOTH=['user','follower','following','Posts','Postscount'];

        return view('profile.app',compact($BOTH));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        abort(404);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $attributtes=request()->validate([
            'name'=>'alpha_dash|max:20',
            'desc'=>[ 'max:100'],
            'city'=>'max:100',
            'instagram'=>'alpha_dash'

         ]);

        $user->update($attributtes);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    { 
        $name=$user->name; 
        DB::table("DELETE FROM users where name=$name");
        return redirect('/login'); 
    }
}
