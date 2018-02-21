<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;


use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use Sluggable;

    use SluggableScopeHelpers;

    public static function associate($slug, $string)
    {
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = ['name'];


    public function posts(){

        return $this->hasMany('App\Post');

    }


}