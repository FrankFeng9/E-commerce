<?php

namespace App\Http\Repositories;

use App\Models\ShipProvince;

class ProvinceRepository
{
    public function listAll()
    {
        $list = ShipProvince::oldest('id')->get();
        return $list;
    }
}
