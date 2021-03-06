<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        protected $fillable = [
        'title', 'story', 'year', 'actors', 'rate',
    ];



    // get comments from a movie
    public function comments()
    {
        return $this->hasMany('App\Comment','post_id')->whereNull('parent_id');
    }


}