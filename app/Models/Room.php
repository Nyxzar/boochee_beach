<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Room extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'sub_title',
    //     'slug',
    //     'intro_text', 
    //     'image',
    //     'description',
    //     'reserve_url',
    //     'room_details',
    //     'room_image',
    //     'published_at',
    //     'order'
    // ];

    protected $guarded = [];

    // Mutators
    public function setSlugAttribute($value)
    {
        return $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function setPublishedAtAttribute($value)
    {
        $date = now();
        
        if(array_key_exists('published_at', $this->attributes) && !is_null($this->attributes['published_at']) && $value === 'draft') {
            $date = null;
        }

        $this->attributes['published_at'] = $date;
    }
    
    public function getWebpageUrlAttribute()
    {
        return $this->exists ?  route("room.show", ['room' => $this->slug]) : null;
    }


    public function getPublishedAtAttribute()
    {
        return is_null($this->attributes['published_at']) ? 'draft' : 'published';
    }
}
