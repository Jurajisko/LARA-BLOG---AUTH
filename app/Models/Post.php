<?php

namespace App\Models;

use app\Http\helpers;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getTeaserAttribute()
    {
        return word_limiter( $this->text, 60 );
    }

    public function getRichTextAttribute()
    {
        return add_paragraphs( filter_url( e($this->text) ) );
    }
/*
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug']  = Str::slug($value);
    }
    */
}
