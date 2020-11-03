<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAttr extends Model
{
    use HasFactory;
    const FOREIGN_KEY_CATEGORY = 'category_id';
    const FOREIGN_KEY_ATTRIBUTE = 'attribute_id';
    protected $table = 'attribute_category';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];
}
