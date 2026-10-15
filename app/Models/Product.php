<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#Fillable([])
class Product extends Model
{
    protected $fillable = ['name','price','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
