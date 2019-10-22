<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        protected $fillable = [
        'title', 'story', 'year', 'actors', 'rate',
    ];




    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id')->whereNull('parent_id');
    }


}