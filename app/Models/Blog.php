<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','body','image_url','image_public_id','author_id'];

    public function Author(){
        return $this->belongsTo(Author::class);
    }

}
