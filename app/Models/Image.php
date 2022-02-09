<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'filename',
        'path',
        'from_url',
        'disk',
        'alt',
        'title',
        'scope',
    ];

    public function URL($url)
    {
        return Image::where('from_url', $url)->first();
    }

    // public function brandCategory()
    // {
    //     return $this->hasMany(Category::class, 'category_id', 'id');
    // }
}
