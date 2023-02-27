<?php

namespace App\Http\Repositories;

use App\Models\Admin;

class AdminRepository
{
    public function get($admin_id)
    {
        $data = Admin::where('id', $admin_id)->first();
        return $data;
    }

    public function ifExitByName($val, $unless_id = 0)
    {
        $base = Admin::where('name', $val);
        if ($unless_id > 0) {
            $base->where('id', '<>', $unless_id);
        }
        $cnt = $base->count();
        return $cnt;
    }

    public function ifExitByEmail($val, $unless_id = 0)
    {
        $base = Admin::where('email', $val);
        if ($unless_id > 0) {
            $base->where('id', '<>', $unless_id);
        }
        $cnt = $base->count();
        return $cnt;
    }
}
