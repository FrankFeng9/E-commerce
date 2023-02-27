<?php

namespace App\Http\Repositories;

use App\Models\Brand;

class BrandRepository
{
    public function listAll($by_key = '')
    {
        if ($by_key) {
            return Brand::get()->keyBy($by_key);
        }
        return Brand::get();
    }

    public function listAllOrder()
    {
        $list = Brand::query()->orderBy('brand_name_en', 'ASC')->get();
        return $list;
    }
}
