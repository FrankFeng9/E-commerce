<?php

namespace App\Http\Repositories;

use App\Models\BillingAddress;

class BillingRepository
{
    public function list($user_id)
    {
        $list = BillingAddress::where('user_id', $user_id)->oldest('id')->get();
        return $list;
    }

    public function get($id)
    {
        $data = BillingAddress::where('id', $id)->first();
        return $data;
    }

    public function store(array $post, $user_id)
    {
        $insert_data = [
            'user_id' => $user_id,
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'city' => $post['city'],
            'province' => $post['province'],
            'postal_code' => $post['postal_code'],

            'company' => $post['company'] ?? '',
            'apt' => $post['apt'] ?? '',
        ];
        $res = BillingAddress::create($insert_data);
        return $res;
    }

    public function update(array $post, $id)
    {
        $update_data = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'city' => $post['city'],
            'province' => $post['province'],
            'postal_code' => $post['postal_code'],

            'company' => $post['company'] ?? '',
            'apt' => $post['apt'] ?? '',
        ];
        $res = BillingAddress::where('id', $id)->update($update_data);
        return $res;
    }

    public function delete($id)
    {
        $rs = BillingAddress::findOrFail($id)->delete();
        return $rs;
    }
}
