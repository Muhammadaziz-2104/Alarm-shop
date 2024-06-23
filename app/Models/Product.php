<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function packages()
    {
        return $this->belongsToMany('App\Models\Package','Pivot table ');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand()
    {
        return $this->belongsToMany(Brand::class,'brand_id');
    }

    public function message()
    {
        return $this->belongsToMany(Massage::class);
    }

    public function shoppingcart(){
        return $this->belongsTo(Shoppingcart::class);
    }
}
