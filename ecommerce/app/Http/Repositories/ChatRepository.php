<?php

namespace App\Http\Repositories;

use GatewayWorker\Lib\Gateway;

class ChatRepository
{
    /**
     * @return int
     */
    public function makeRoomId()
    {
        $list = Gateway::getAllGroupIdList();

        $room_prefix = 'room-';
        $end = end($list) ?: '';
        $cnt = str_replace($room_prefix, '', $end);
        $cnt = max(0, $cnt);

        return $room_prefix . ++$cnt;
    }

    /**
     * @return array
     */
    public function allRooms()
    {
        return array_keys(Gateway::getAllGroupIdList());
    }
}
