<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = 'category';

    protected $fillable = [
        'category',
    ];

    public function productBrand() {
        return $this->hasMany('App\Product', 'cat_id');
    }

}
