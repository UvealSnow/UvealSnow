<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Post the model belongs to
     *
     * @return Post
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
