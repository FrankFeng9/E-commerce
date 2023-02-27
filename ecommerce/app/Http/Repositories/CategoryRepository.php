<?php

namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function listAll($by_key = '')
    {
        if ($by_key) {
            return Category::get()->keyBy($by_key);
        }
        return Category::get();
    }

    public function listAllOrder()
    {
        $list = Category::query()->orderBy('category_name_en', 'ASC')->get();
        return $list;
    }

    public function rejectAccessories($categories)
    {
        $categories = $categories->reject(function ($item) {
            return strtolower($item->category_name_en) === 'accessories';
        });
        return $categories;
    }
}
