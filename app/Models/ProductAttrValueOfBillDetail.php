<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttrValueOfBillDetail extends Model
{
    use HasFactory;
    const FOREIGN_KEY_BILL_DETAIL = 'bill_detail_id';
    protected $table = 'product_attr_value_of_bill_detail';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];
}
