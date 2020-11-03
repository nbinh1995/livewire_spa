<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    const FOREIGN_KEY_PRODUCT = 'product_id';

    protected $table = 'product_images';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, self::FOREIGN_KEY_PRODUCT, Product::PRIMARY_KEY_TABLE);
    }

    public static function getImagesByProductId($product_id)
    {
        return self::select('path')->where('product_id', $product_id)->get();
    }
}
