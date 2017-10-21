<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function sub_category()
    {
        return $this->belongsTo('App\Sub_Category');
    }
}
