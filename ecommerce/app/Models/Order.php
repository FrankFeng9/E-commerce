<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_SUCCEEDED = 'succeeded';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function provinceModel()
    {
        return $this->belongsTo(ShipProvince::class,'province','id');
    }

    public function billProvinceModel()
    {
        return $this->belongsTo(ShipProvince::class,'bill_province','id');
    }

    /**
     * @return array
     */
    public static function shipMethodRel()
    {
        return [
            [
                'id' => 1,
                'text' => 'Free Shipping',
                'amount' => 0,
            ],
            [
                'id' => 2,
                'text' => 'Canada Post Expedited Shipping ',
                'amount' => 9.99,
            ],
            [
                'id' => 3,
                'text' => 'FedEx Express Shipping',
                'amount' => 19.99,
            ],
            [
                'id' => 4,
                'text' => 'UPS Priority Shipping',
                'amount' => 23.99,
            ],
        ];
    }
}
