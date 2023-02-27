<?php

namespace App\Imports;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProudctsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $category_all = $collection->pluck('category')->filter()->unique()->values();
        $brand_all = $collection->pluck('brand')->filter()->unique()->values();
        $this->insertOrUpdateCategory($category_all);
        $this->insertOrUpdateBrand($brand_all);
        $category_id_rel = $this->getCategoryId($category_all);
        $brand_id_rel = $this->getBrandId($brand_all);

        foreach ($collection as $item) {
            if (empty($item['id'])) {
                break;
            }
            $curr_id = $item['id'] + 100;
            $insert_data = [
                'id' => $curr_id,
                'brand_id' => $brand_id_rel[trim($item['brand'])] ?? 0,
                'category_id' => $category_id_rel[trim($item['category'])] ?? 0,
                'product_name_en' => $item['name'],
                'product_slug_en' => $curr_id,
                'os' => $item['os'] ?: '',
                'usage' => $item['usage'] ?: '',

                'product_code' => mt_rand(100000, 999999),
                'selling_price' => $item['price'],
                'short_descp_en' => $item['overview'],
                'long_descp_en' => $item['details'],
                'product_thambnail' => '',
                'status' => 1,
            ];
            Product::create($insert_data);
        }
    }

    private function insertOrUpdateCategory(Collection $category_all)
    {
        // DB::enableQueryLog();
        foreach ($category_all as $v) {
            $v = trim($v);

            $cnt = DB::table('categories')->where('category_name_en', $v)->count();
            if (!$cnt) {
                $insert_data = [
                    'category_name_en' => $v,
                    'category_slug_en' => Str::plural($v, 1),
                    'category_icon' => '',
                ];
                Category::create($insert_data);
                // dd(DB::getQueryLog());
            }
        }
    }

    private function insertOrUpdateBrand(Collection $brand_all)
    {
        foreach ($brand_all as $v) {
            $v = trim($v);

            $cnt = DB::table('brands')->where('brand_name_en', $v)->count();
            if (!$cnt) {
                $insert_data = [
                    'brand_name_en' => $v,
                    'brand_slug_en' => Str::plural($v, 1),
                ];
                Brand::create($insert_data);
            }
        }
    }

    private function getBrandId(Collection $brand_all)
    {
        return DB::table('brands')->whereIn('brand_name_en', $brand_all)->pluck('id', 'brand_name_en');
    }

    private function getCategoryId(Collection $category_all)
    {
        return DB::table('categories')->whereIn('category_name_en', $category_all)->pluck('id', 'category_name_en');
    }
}
