<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uri';
    }

    /**
     * Returns a collection of Posts that the model owns
     *
     * @return Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
