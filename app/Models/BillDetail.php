<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillDetail extends Model
{
    const PRIMARY_KEY_TABLE = 'id';
    const FOREIGN_KEY_PRODUCT = 'product_id';
    const FOREIGN_KEY_BILL = 'bill_id';
    const FOREIGN_KEY_SIZE = 'size_id';

    use HasFactory;
    use SoftDeletes;
    protected $table = 'bill_details';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class, self::FOREIGN_KEY_BILL, Bill::PRIMARY_KEY_TABLE);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, self::FOREIGN_KEY_PRODUCT, Product::PRIMARY_KEY_TABLE);
    }
    public function billDetailProductAttr()
    {
        return $this->hasMany(BillDetailProductAttr::class, ProductAttrValueOfBillDetail::FOREIGN_KEY_BILL_DETAIL, self::PRIMARY_KEY_TABLE);
    }
}
