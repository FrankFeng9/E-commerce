<?php

namespace App\Response;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse;

class PasswordNewFail implements SuccessfulPasswordResetLinkRequestResponse
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function toResponse($request)
    {
        return redirect(route('password.reset', [$request->input('token')]))->with($this->params);
    }
}
