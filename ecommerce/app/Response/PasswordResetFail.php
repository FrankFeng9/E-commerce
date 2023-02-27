<?php

namespace App\Response;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse;

class PasswordResetFail implements SuccessfulPasswordResetLinkRequestResponse
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function toResponse($request)
    {
        return redirect(route('password.request'))->with($this->params);
    }
}
