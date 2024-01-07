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
        return Str::words(strip_tags($this->body),30);

    }

    public function getFormattedDate()
    {
        return $this->published_at->format('F jS');
    }

}
