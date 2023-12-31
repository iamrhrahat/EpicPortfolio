<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'socialmedia_1_link',
        'socialmedia_1_icon',
        'socialmedia_2_link',
        'socialmedia_2_icon',
        'socialmedia_3_link',
        'socialmedia_3_icon',
        'socialmedia_4_link',
        'socialmedia_4_icon',
        'socialmedia_5_link',
        'socialmedia_5_icon',
        'created_at',
        'updated_at'
    ];

}
