<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder as SchemaBuilder;

class Posts extends Model
{
    protected $fillable=['user_id','body','cat','image','caption'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }


      public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT post_id, SUM(liked) likes  FROM likes GROUP BY post_id',
            'likes',
            'likes.post_id',
            'posts.id'
        );
    }
}
