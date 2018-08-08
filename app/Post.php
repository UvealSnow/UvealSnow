<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Category the Post belongs to
     *
     * @return Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * User the Post belongs to
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns a collection of Posts that the model owns
     *
     * @return Post
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uri';
    }
}
