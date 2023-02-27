<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'shipping_address';

    public function provinceModel()
    {
        return $this->belongsTo(ShipProvince::class,'province','id');
    }
}
