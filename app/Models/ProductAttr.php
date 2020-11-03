<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttr extends Model
{
    use HasFactory;
    const FOREIGN_KEY_PRODUCT = 'product_id';
    const FOREIGN_KEY_ATTR_VALUE = 'attribute_value_id';
    protected $table = 'attribute_value_product';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];
}
