<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','city','desc','instagram','whatsapp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getSocialAttribute($value)
    {
        return json_decode($value);
    }

      public function getRouteKeyName()
     {
         return 'name';
     }
     

//posts

     public function posts()
     {
         return $this->hasmany(Posts::class);
     }

       public function timeline()
    {
        $friends=$this->follows->pluck('id');
        return Posts::whereIn('user_id', $friends)
                    ->orWhere('user_id', $this->id)
                    ->withlikes()
                    ->latest()->get();
    }


//friends

      public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }


      public function following(User $user)
    {
        return $this->follows->contains($user);
    }

     public function followinglist(User $user)
    {
        $friends=$this->follows->pluck('id');
        return follows::whereIn('user_id',$user);
    }

    public function follower(User $user)
    {
        $friends=$this->follows->pluck('id');
        return follows::whereIn('following_user_id',$user);
    }



}
