<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','designation'];

    public function Blog(){
        return $this->hasMany(Blog::class);
    }
}
