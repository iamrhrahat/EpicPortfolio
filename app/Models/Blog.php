<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'user_id',
        'meta_title',
        'meta_description',
        'meta_keyword'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];
    public function shortBody($words = 30): string
    {
        $bodyWithoutTags = strip_tags($this->body);

        return Str::words($bodyWithoutTags, $words);

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getFormattedDate()
    {
        return $this->published_at->format('F jS');
    }

}
