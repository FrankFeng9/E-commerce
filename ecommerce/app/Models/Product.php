<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return array
     */
    public static function osRel()
    {
        return [
            'Mac OS',
            'Windows',
        ];
    }

    /**
     * @return array
     */
    public static function usageRelShopPage()
    {
        return [
            'Home',
            'Business',
            'Gaming',
        ];
    }

    /**
     * 暂没用到，后期考虑删除
     *
     * @return array
     */
    public static function usageRel()
    {
        return [
            'Home',
            'Business',
            'Gaming',
        ];
    }

    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
