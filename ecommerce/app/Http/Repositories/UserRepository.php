<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository
{
    public function get($user_id)
    {
        $data = User::where('id', $user_id)->first();
        return $data;
    }

    public function del($user_id)
    {
        $data_user = $this->get($user_id);
        $res = $data_user->delete();
        return $res;
    }
}
