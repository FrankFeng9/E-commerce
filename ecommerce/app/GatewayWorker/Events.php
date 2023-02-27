<?php

namespace App\GatewayWorker;

use App\Http\Repositories\ChatRepository;
use App\Http\Services\CommonService;
use App\Models\Order;
use App\Models\Chat;
use GatewayWorker\Lib\Gateway;
use Illuminate\Support\Facades\Log;

class Events
{

    public static function onWorkerStart($businessWorker)
    {
        echo "BusinessWorker    Start\n";
    }

    public static function onConnect($client_id)
    {
        Gateway::sendToClient($client_id, CommonService::jsonEncode(['type' => 'init', 'client_id' => $client_id]));
    }

    public static function onWebSocketConnect($client_id, $data)
    {
        $remote_addr = $_SERVER['REMOTE_ADDR'] ?? '';
        $real_ip = $data['server']['HTTP_X_REAL_IP'] ?? '';

        $_SESSION['realIP'] = $real_ip ?: $remote_addr;
    }

    public static function onMessage($client_id, $message)
    {
        $message = CommonService::jsonDecode($message);

        $chatRepository = new ChatRepository();

        // var_dump('realIP', $_SESSION['realIP']);
        switch ($message['mode']) {
            case 'user_login':
                // add to group
                $room_id = $chatRepository->makeRoomId();
                Gateway::joinGroup($client_id, $room_id);

                $res = [
                    'type' => 'admin_say',
                    'client_id' => $client_id,

                    'data' => [
                        'date' => date('m-d H:i:s'),
                        'avatar' => '/img/kefu.jpeg',
                        'username' => 'Online Support',
                        'content' => 'Welcome to BestChoice! I\'m your support specialist. How can I help?',
                    ],
                ];
                Gateway::sendToCurrentClient(CommonService::jsonEncode($res));
                break;
            case 'user_say':
                $avatar = $message['avatar'] ?? '';
                $username = $message['username'] ?? '';
                $res = [
                    'type' => 'user_say',
                    'client_id' => $client_id,

                    'data' => [
                        'date' => date('m-d H:i:s'),
                        'avatar' => $avatar ?: '/img/user-filling.png',
                        'username' => $username ?: 'Guest',
                        'content' => $message['msg'],
                    ],
                ];
                Gateway::sendToAll(CommonService::jsonEncode($res));
                break;
            case 'admin_login':
                    // add to group
                    $room_id = $chatRepository->makeRoomId();
                    Gateway::joinGroup($client_id, $room_id);
                    break;
            case 'admin_say':
                $res = [
                    'type' => 'admin_say',
                    'client_id' => $client_id,

                    'data' => [
                        'date' => date('m-d H:i:s'),
                        'avatar' => '/img/kefu.jpeg',
                        'username' => 'Online Support',
                        'content' => $message['msg'],
                    ],
                ];
                Gateway::sendToAll(CommonService::jsonEncode($res));
                break;
            case 'all-rooms':
                $rooms = $chatRepository->allRooms();
                var_dump($rooms);
                break;
            default:
                break;
        }
    }

    public static function onClose($client_id)
    {
        Log::info('close connection' . $client_id);
    }
}
