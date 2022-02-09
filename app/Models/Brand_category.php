<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Models
use App\Models\Category;
use App\Models\Brand;

class Brand_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'category_id',
    ];

    public function brandCategory()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function brandBrands()
    {
        return $this->hasMany(Brand::class, 'brand_id', 'id');
    }
}
