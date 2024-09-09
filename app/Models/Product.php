<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function productType()
    {
    return $this->belongsTo(ProductType::class, 'product_type_id');
    }
    public function getimage()
    {
    return $this->image_url==""?"https://pics.clipartpng.com/Cardboard_Box_PNG_Clip_Art_Image-2761.png": $this->image_url;
    }
}
