<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class follows extends Model
{
    protected $fillable=['user_id','following_user_id'];
}
