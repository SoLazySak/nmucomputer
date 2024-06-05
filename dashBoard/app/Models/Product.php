<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "categId",
        "brandId",
        "prodName",
        "prodPrice",
        "prodStock",
        "prodStatus",
        "image",

    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brandId');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'categId');
    }
}
