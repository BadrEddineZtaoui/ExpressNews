<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function article()
    {
        return $this->hasMany('App\Article');
    }
}
