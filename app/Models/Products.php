<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name','price','description','image_url','image_public_id'];


    public function Category(){

        return $this->belongsTo(Category::class);
    }
}
