<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ChatRepository;

class ChatController extends Controller
{
    /**
     * @var ChatRepository
     */
    private $chatRepository;

    public function __construct(ChatRepository $chatRepository)
    {
        $this->chatRepository = $chatRepository;
    }

    public function ListView()
    {
        $vars = [
            'list' => [],
        ];
        return view('backend.chat.list_view', $vars);
    }

    public function DetailView()
    {
    }
}
