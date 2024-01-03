<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'Section',
        'title',
        'description',
        'skill_1',
        'skill_1_p',
        'skill_2',
        'skill_2_p',
        'skill_3',
        'skill_3_p',
        'skill_4',
        'skill_4_p'
    ];
}
