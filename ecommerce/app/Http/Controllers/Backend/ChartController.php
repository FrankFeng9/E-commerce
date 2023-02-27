<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\BrandRepository;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ReportRepository;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * @var ReportRepository
     */
    private $reportRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var BrandRepository
     */
    private $brandRepository;

    /**
     * @var Request
     */
    private $request;

    public function __construct(
        ReportRepository $reportRepository,
        CategoryRepository $categoryRepository,
        BrandRepository $brandRepository,
        Request $request
    ) {
        $this->reportRepository = $reportRepository;

        $this->categoryRepository = $categoryRepository;

        $this->brandRepository = $brandRepository;

        $this->request = $request;
    }

    public function ChartView()
    {
        $all_brand = $this->brandRepository->listAllOrder();
        $all_cate = $this->categoryRepository->listAllOrder();

        $vars = [
            'all_brand' => $all_brand,
            'all_cate' => $all_cate,
            'year_all' => $this->reportRepository->yearAll(),
        ];
        return view('backend.chart.chart_view', $vars);
    }

    //  Sale Amount by Month
    public function SaleAmountByYear()
    {
        $year = $this->request->input('year_name');
        $category_id = $this->request->input('category_id');
        $brand_id = $this->request->input('brand_id');
        $product_name_en = $this->request->input('product_name_en');

        $list_group = Order::query()
            ->where('created_at', 'like', "{$year}%")
            ->where('status', Order::STATUS_SUCCEEDED)
            ->where(function ($query) use ($category_id, $brand_id, $product_name_en) {
                if ($category_id || $brand_id || $product_name_en) {
                    $query->whereHas('orderItem.product', function ($queryHas) use ($category_id, $brand_id, $product_name_en) {
                        if ($category_id) {
                            $queryHas->where('category_id', $category_id);
                        }

                        if ($brand_id) {
                            $queryHas->where('brand_id', $brand_id);
                        }

                        if ($product_name_en) {
                            $queryHas->where('product_name_en', 'like', "%{$product_name_en}%");
                        }
                    });
                }
            })
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') month_name"), DB::raw("SUM(amount) as sum_amount"))
            ->groupBy('month_name')
            ->pluck('sum_amount', 'month_name');

        $list_group_cnt = Order::query()
            ->where('created_at', 'like', "{$year}%")
            ->where('status', Order::STATUS_SUCCEEDED)
            ->where(function ($query) use ($category_id, $brand_id, $product_name_en) {
                if ($category_id || $brand_id || $product_name_en) {
                    $query->whereHas('orderItem.product', function ($queryHas) use ($category_id, $brand_id, $product_name_en) {
                        if ($category_id) {
                            $queryHas->where('category_id', $category_id);
                        }

                        if ($brand_id) {
                            $queryHas->where('brand_id', $brand_id);
                        }

                        if ($product_name_en) {
                            $queryHas->where('product_name_en', 'like', "%{$product_name_en}%");
                        }
                    });
                }
            })
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') month_name"), DB::raw("COUNT(*) as my_cnt"))
            ->groupBy('month_name')
            ->pluck('my_cnt', 'month_name');

        $x_axis = $this->reportRepository->allYearMonth($year);
        $list_month = $this->reportRepository->combineYearMonth($x_axis, $list_group);
        $list_month_cnt = $this->reportRepository->combineYearMonth($x_axis, $list_group_cnt);

        $all_brand = $this->brandRepository->listAllOrder();
        $all_cate = $this->categoryRepository->listAllOrder();
        $vars = [
            'x_axis' => $x_axis,
            'list_month' => $list_month,
            'list_month_cnt' => $list_month_cnt,

            'all_brand' => $all_brand,
            'all_cate' => $all_cate,
            'year_all' => $this->reportRepository->yearAll(),
        ];
        return view('backend.chart.sale_amount_by_year', $vars);
    }

    // Sale Amount by Product Category
    public function SaleAmountByCategory()
    {
        $year = $this->request->input('year_name', null);

        $all_cate = $this->categoryRepository->listAllOrder();
        $x_axis = $all_cate->pluck('category_name_en');

        $data_cate = [];
        $data_cate_cnt = [];
        foreach ($all_cate as $item_cate) {
            $cate_id = $item_cate->id;
            $list_sum = Order::query()
                ->where('status', Order::STATUS_SUCCEEDED)
                ->where(function ($query) use ($year) {
                    if ($year) {
                        $query->where('created_at', 'like', "{$year}%");
                    }
                })
                ->whereHas('orderItem.product', function ($query) use ($cate_id) {
                    $query->where('category_id', $cate_id);
                })
                ->sum('amount');
            $data_cate[] = $list_sum;

            $list_cnt = Order::query()
                ->where('status', Order::STATUS_SUCCEEDED)
                ->where(function ($query) use ($year) {
                    if ($year) {
                        $query->where('created_at', 'like', "{$year}%");
                    }
                })
                ->whereHas('orderItem.product', function ($query) use ($cate_id) {
                    $query->where('category_id', $cate_id);
                })
                ->count();
            $data_cate_cnt[] = $list_cnt;
        }

        $vars = [
            'x_axis' => $x_axis,
            'data_cate' => $data_cate,
            'data_cate_cnt' => $data_cate_cnt,

            'year_all' => $this->reportRepository->yearAll(),
        ];
        return view('backend.chart.sale_amount_by_category', $vars);
    }

    // Sale Amount by Product Brand
    public function SaleAmountByBrand()
    {
        $year = $this->request->input('year_name', null);

        $all_brand = $this->brandRepository->listAllOrder();
        $x_axis = $all_brand->pluck('brand_name_en');

        $data_brand = [];
        $data_brand_cnt = [];
        foreach ($all_brand as $item_brand) {
            $brand_id = $item_brand->id;
            $list_sum = Order::query()
                ->where('status', Order::STATUS_SUCCEEDED)
                ->where(function ($query) use ($year) {
                    if ($year) {
                        $query->where('created_at', 'like', "{$year}%");
                    }
                })
                ->whereHas('orderItem.product', function ($query) use ($brand_id) {
                    $query->where('brand_id', $brand_id);
                })
                ->sum('amount');
            $data_brand[] = $list_sum;

            $list_cnt = Order::query()
                ->where('status', Order::STATUS_SUCCEEDED)
                ->where(function ($query) use ($year) {
                    if ($year) {
                        $query->where('created_at', 'like', "{$year}%");
                    }
                })
                ->whereHas('orderItem.product', function ($query) use ($brand_id) {
                    $query->where('brand_id', $brand_id);
                })
                ->count();
            $data_brand_cnt[] = $list_cnt;
        }

        $vars = [
            'x_axis' => $x_axis,
            'data_brand' => $data_brand,
            'data_brand_cnt' => $data_brand_cnt,

            'year_all' => $this->reportRepository->yearAll(),
        ];
        return view('backend.chart.sale_amount_by_brand', $vars);
    }
}
