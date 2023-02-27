<?php

namespace App\Http\Repositories;

use App\Models\Order;

class OrderRepository
{
    /**
     * @param string $transaction_id
     * @return Order
     */
    public function getByTransactionId($transaction_id)
    {
        $res = Order::where('transaction_id', $transaction_id)->first();
        return $res;
    }

    /**
     * @param int $order_id
     * @return Order
     */
    public function getByOrderId($order_id)
    {
        $res = Order::where('id', $order_id)->first();
        return $res;
    }

    /**
     * @param Order $data_order
     * @param int $uid
     * @return bool
     */
    public function checkOrderSelf($data_order, $uid)
    {
        return $data_order->user_id == $uid;
    }

    /**
     * @param Order $data_order
     * @param string $status
     * @return Order
     */
    public function updateStatus($data_order, $status)
    {
        $data_order->status = $status;
        $data_order->save();
        return $data_order;
    }

    /**
     * The tax rate is 13%
     *
     * @param float $cartTotal
     * @return float
     */
    public function calcTax($cartTotal)
    {
        $amount_tax = round($cartTotal*0.13, 2);
        return $amount_tax;
    }

    /**
     * @param int $val
     * @return float
     */
    public function returnAmountShip($val)
    {
        $shipMethodRel = Order::shipMethodRel();
        foreach ($shipMethodRel as $item_method) {
            if ($item_method['id'] == $val) {
                return $item_method['amount'];
            }
        }
        return 0;
    }

    /**
     * @param int $val
     * @return string
     */
    public function returnStrShip($val)
    {
        $shipMethodRel = Order::shipMethodRel();
        foreach ($shipMethodRel as $item_method) {
            if ($item_method['id'] == $val) {
                return $item_method['text'];
            }
        }
        return '--';
    }
}
