<?php

namespace App\Http\Controllers\Post;

use App\Services\Post\Service;

class BaseController
{

    public function __construct(public Service $service)
    {
    }
}
