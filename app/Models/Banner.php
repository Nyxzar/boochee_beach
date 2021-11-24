<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'sub_title',
    //     'image',
    //     'description',
    //     'published_at',
    //     'order'
    // ];

    protected $guarded = [];

    public function setPublishedAtAttribute($value)
    {
        $date = now();
        
        if(array_key_exists('published_at', $this->attributes) && !is_null($this->attributes['published_at']) && $value === 'draft') {
            $date = null;
        }

        $this->attributes['published_at'] = $date;
    }

    public function getPublishedAtAttribute()
    {
        return is_null($this->attributes['published_at']) ? 'draft' : 'published';
    }

}
