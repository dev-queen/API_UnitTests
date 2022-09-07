<?php

namespace App\Http\Controllers;

class FreelanserController extends ApiControllers
{
    public function __construct(Freelancer $model)
    {
        $this->model = $model;
    }

}
