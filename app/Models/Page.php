<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Str;

class Page extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'sub_title',
    //     'slug',
    //     'intro_text', 
    //     'image',
    //     'description',
    //     'sub_description',
    //     'published_at',
    //     'order'
    // ];

    protected $guarded = [];


    public function menu(): BelongsTo
    {
        return $this->belongsTo( Menu::class );
    }

    // Mutators
    public function setSlugAttribute($value)
    {
        return $this->attributes['slug'] = Str::slug($value, '-');
    }


    public function getWebpageUrlAttribute()
    {
        return $this->exists ? route('page.show' ,['slug' => $this->slug]) : null;
    }


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
