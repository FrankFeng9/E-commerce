<?php

namespace App\Http\Repositories;

class ReportRepository
{
    /**
     * @param int $year
     * @return array
     */
    public function allYearMonth($year)
    {
        $data = [];
        $range = range(1, 12);
        foreach ($range as $v) {
            $v = str_pad($v, 2, 0, STR_PAD_LEFT);
            $data[] = "{$v}-{$year}";
        }
        return $data;
    }

    /**
     * @param array $month_arr
     * @param array $list_group
     * @return array
     */
    public function combineYearMonth($month_arr, $list_group)
    {
        $data_ym = [];
        foreach ($month_arr as $month_item) {
            $month_amount = $list_group[$month_item] ?? 0;
            $data_ym[] = $month_amount;
        }

        return $data_ym;
    }

    /**
     * @return array
     */
    public function yearAll()
    {
        return range(2022, 2026);
    }
}
